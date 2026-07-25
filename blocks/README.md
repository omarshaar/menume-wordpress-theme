# MenuMe blocks

Create each custom block in its own directory:

```text
blocks/
└── example/
    ├── block.json
    ├── index.js
    ├── render.php        # Optional, for dynamic blocks.
    ├── style.css         # Optional, front end and editor.
    └── editor.css        # Optional, editor only.
```

Use the `menume` namespace and category in every `block.json`:

```json
{
  "apiVersion": 3,
  "name": "menume/example",
  "title": "Example",
  "category": "menume",
  "textdomain": "menume"
}
```

Blocks are discovered and registered automatically by the theme.

