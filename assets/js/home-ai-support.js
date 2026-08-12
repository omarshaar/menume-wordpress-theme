(function () {
	'use strict';

	const roots = document.querySelectorAll('[data-ai-support-soundwave]');

	if (!roots.length) {
		return;
	}

	const colors = {
		cyan: '0, 245, 255',
		teal: '0, 210, 190',
		magenta: '214, 0, 255',
		violet: '116, 92, 255',
		blue: '35, 87, 255',
	};

	const clamp = (value, min, max) => Math.min(Math.max(value, min), max);
	const gaussian = (value, center, spread) => Math.exp(-Math.pow((value - center) / spread, 2));
	const rgba = (color, alpha) => `rgba(${color}, ${alpha})`;

	function resizeCanvas(canvas, context) {
		const rect = canvas.getBoundingClientRect();
		const dpr = clamp(window.devicePixelRatio || 1, 1, 2);

		canvas.width = Math.max(1, Math.floor(rect.width * dpr));
		canvas.height = Math.max(1, Math.floor(rect.height * dpr));
		context.setTransform(dpr, 0, 0, dpr, 0, 0);

		return {
			width: rect.width,
			height: rect.height,
		};
	}

	function envelope(u, time) {
		const center = 0.5 + Math.sin(time * 0.28) * 0.045;

		return (
			gaussian(u, center, 0.24) +
			gaussian(u, center - 0.22, 0.115) * 0.72 +
			gaussian(u, center + 0.25, 0.13) * 0.62
		);
	}

	function energy(time) {
		const slow = Math.sin(time * 0.42) * 0.5 + 0.5;
		const swell = Math.sin(time * 0.18 + 1.4) * 0.5 + 0.5;
		const spark = Math.pow(Math.sin(time * 0.76 + 0.8) * 0.5 + 0.5, 3);

		return 0.58 + slow * 0.22 + swell * 0.14 + spark * 0.18;
	}

	function waveY(u, time, layer, height, direction, intensity) {
		const base = height * 0.5;
		const amp = height * layer.amplitude * intensity * envelope(u, time);
		const tempo = 1.08 + intensity * 0.26;
		const sharedPhase = u * 18 - time * 1.35 * tempo;
		const primary = Math.sin(sharedPhase + layer.phase);
		const secondary = Math.sin(u * 31 + time * 0.82 * tempo + layer.phase * 1.7) * 0.38;
		const detail = Math.sin(u * 57 - time * 1.18 * tempo + layer.phase * 0.8) * 0.12;

		return base + direction * (primary + secondary + detail) * amp + layer.offset;
	}

	function makeLineGradient(context, width, alpha) {
		const gradient = context.createLinearGradient(0, 0, width, 0);

		gradient.addColorStop(0, rgba(colors.magenta, 0));
		gradient.addColorStop(0.18, rgba(colors.violet, alpha * 0.56));
		gradient.addColorStop(0.35, rgba(colors.magenta, alpha));
		gradient.addColorStop(0.5, rgba(colors.cyan, alpha));
		gradient.addColorStop(0.66, rgba(colors.blue, alpha * 0.88));
		gradient.addColorStop(0.82, rgba(colors.teal, alpha * 0.58));
		gradient.addColorStop(1, rgba(colors.cyan, 0));

		return gradient;
	}

	function strokeWave(context, width, height, time, layer, direction, intensity) {
		const points = 220;
		const pad = 52;

		context.save();
		context.globalCompositeOperation = 'lighter';
		context.lineCap = 'round';
		context.lineJoin = 'round';
		context.strokeStyle = makeLineGradient(context, width, layer.alpha * (1 + intensity * 0.18));
		context.lineWidth = layer.width * (0.94 + intensity * 0.14);
		context.shadowColor = rgba(layer.glowColor, layer.shadow * (1.05 + intensity * 0.16));
		context.shadowBlur = layer.glow * (1.18 + intensity * 0.32);
		context.filter = layer.blur ? `blur(${layer.blur}px)` : 'none';
		context.beginPath();

		for (let index = 0; index <= points; index += 1) {
			const progress = index / points;
			const x = -pad + (width + pad * 2) * progress;
			const u = x / width;
			const y = waveY(u, time, layer, height, direction, intensity);

			if (index === 0) {
				context.moveTo(x, y);
			} else {
				context.lineTo(x, y);
			}
		}

		context.stroke();
		context.restore();
	}

	function drawCenter(context, width, height, time, intensity) {
		const centerY = height * 0.5;
		const pulse = Math.sin(time * 2.1) * 0.5 + 0.5;

		context.save();
		context.globalCompositeOperation = 'lighter';
		context.strokeStyle = makeLineGradient(context, width, 0.96);
		context.lineCap = 'round';
		context.shadowColor = rgba(colors.cyan, 0.92);
		context.shadowBlur = 26 + pulse * 12 + intensity * 8;

		context.lineWidth = 1.2;
		context.beginPath();
		context.moveTo(0, centerY);
		context.lineTo(width, centerY);
		context.stroke();

		context.globalAlpha = 0.36;
		context.lineWidth = 4;
		context.beginPath();
		context.moveTo(0, centerY);
		context.lineTo(width, centerY);
		context.stroke();
		context.restore();
	}

	function drawFineSparks(context, width, height, time, intensity) {
		const centerY = height * 0.5;
		const gradient = makeLineGradient(context, width, 0.38 + intensity * 0.1);

		context.save();
		context.globalCompositeOperation = 'lighter';
		context.strokeStyle = gradient;
		context.lineWidth = 0.75;
		context.shadowColor = rgba(colors.magenta, 0.62);
		context.shadowBlur = 16 + intensity * 7;

		for (let row = -2; row <= 2; row += 1) {
			context.beginPath();

			for (let index = 0; index <= 180; index += 1) {
				const progress = index / 180;
				const x = width * progress;
				const u = progress;
				const local = envelope(u, time) * height * (0.026 + intensity * 0.018);
				const y = centerY + row * 4.5 + Math.sin(u * 42 + time * (1.2 + intensity * 0.9) + row) * local;

				if (index === 0) {
					context.moveTo(x, y);
				} else {
					context.lineTo(x, y);
				}
			}

			context.stroke();
		}

		context.restore();
	}

	function init(root) {
		const canvas = root.querySelector('canvas');

		if (!canvas) {
			return;
		}

		const context = canvas.getContext('2d', { alpha: true });

		if (!context) {
			return;
		}

		let size = resizeCanvas(canvas, context);
		let frameId = 0;
		let isRunning = false;
		let lastFrameTime = 0;
		let animationTime = 0;

		const layers = [
			{ alpha: 0.58, amplitude: 0.18, width: 3.4, offset: -2, phase: 0.15, glow: 28, shadow: 0.84, glowColor: colors.magenta, blur: 0.6 },
			{ alpha: 0.72, amplitude: 0.145, width: 3, offset: 1, phase: 1.25, glow: 30, shadow: 0.88, glowColor: colors.cyan, blur: 0.4 },
			{ alpha: 0.46, amplitude: 0.22, width: 2.2, offset: 0, phase: 2.2, glow: 22, shadow: 0.66, glowColor: colors.blue, blur: 1.2 },
			{ alpha: 0.43, amplitude: 0.105, width: 1.6, offset: 4, phase: 3.1, glow: 19, shadow: 0.6, glowColor: colors.teal, blur: 0 },
		];

		function render(now) {
			if (!isRunning) {
				return;
			}

			if (!lastFrameTime) {
				lastFrameTime = now;
			}

			const delta = Math.min((now - lastFrameTime) / 1000, 0.035);
			lastFrameTime = now;
			animationTime += delta;

			const time = animationTime;
			const intensity = energy(time);

			context.clearRect(0, 0, size.width, size.height);

			layers.forEach((layer) => {
				strokeWave(context, size.width, size.height, time, layer, -1, intensity);
				strokeWave(context, size.width, size.height, time + 0.42, layer, 1, intensity * 0.92);
			});

			drawFineSparks(context, size.width, size.height, time, intensity);
			drawCenter(context, size.width, size.height, time, intensity);

			frameId = window.requestAnimationFrame(render);
		}

		function start() {
			if (isRunning) {
				return;
			}

			isRunning = true;
			lastFrameTime = 0;
			frameId = window.requestAnimationFrame(render);
		}

		function stop() {
			if (!isRunning) {
				return;
			}

			isRunning = false;
			window.cancelAnimationFrame(frameId);
			frameId = 0;
			lastFrameTime = 0;
		}

		const observer = new ResizeObserver(() => {
			size = resizeCanvas(canvas, context);
		});

		observer.observe(root);
		start();

		document.addEventListener('visibilitychange', () => {
			if (document.hidden) {
				stop();
				return;
			}

			start();
		});
	}

	roots.forEach(init);
})();
