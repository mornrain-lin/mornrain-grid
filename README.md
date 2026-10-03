---
AIGC:
    Label: "1"
    ContentProducer: 001191440300708461136T1XGW3
    ProduceID: cf93d2ba4252e3fc820ac383cb09c649_795e8692be7a11f18019525400248c00
    ReservedCode1: tdsvRz5Nft5kSy0SnXjQXRleunjYVYLo1h+Hz2okbjaWy6ClZCPVFkm6L027W2V1x+UY+YVbzKfSx85KfGGIGef/0AQnxJn9lP83QT1158PZWb7PUxtmm66FQlCcbV0O5AG1gKVS4gijVfIhO7c9UcPXVlSI+W1uY8wxfyY4eBL7a828xzW/LL1p+k8=
    ContentPropagator: 001191440300708461136T1XGW3
    PropagateID: cf93d2ba4252e3fc820ac383cb09c649_795e8692be7a11f18019525400248c00
    ReservedCode2: tdsvRz5Nft5kSy0SnXjQXRleunjYVYLo1h+Hz2okbjaWy6ClZCPVFkm6L027W2V1x+UY+YVbzKfSx85KfGGIGef/0AQnxJn9lP83QT1158PZWb7PUxtmm66FQlCcbV0O5AG1gKVS4gijVfIhO7c9UcPXVlSI+W1uY8wxfyY4eBL7a828xzW/LL1p+k8=
---

# MornRain Grid

> A magazine-style grid theme for dense, visual publishing.

`MornRain Grid` is a standalone WordPress theme by **MornRain**. It ships as pure
code with **zero third-party runtime dependencies**, loads **no external CDN**
assets, contacts **no remote service** and creates **no extra database tables**.

| Item | Value |
| --- | --- |
| License | GNU General Public License v2 or later |
| Minimum WordPress | 6.0 |
| Minimum PHP | 8.0 |
| Text domain | `mornrain-grid` |
| Function prefix | `mornrain_grid` |

---

## Table of contents

1. [Features](#features)
2. [Requirements](#requirements)
3. [Installation](#installation)
4. [Configuration](#configuration)
5. [File structure](#file-structure)
6. [Development and quality checks](#development-and-quality-checks)
7. [Frequently asked questions](#frequently-asked-questions)
8. [Changelog](#changelog)
9. [License](#license)

---

## Features

- Magazine masthead with a heavy rule and uppercase navigation.
- Masonry archive built on native CSS multi-column layout, no JavaScript.
- Responsive column count: three columns, then two, then a single column.
- High-contrast black-on-white palette with a single red accent.
- Two bespoke image sizes for feature and card imagery.
- Tight, editorial typography with strong headline hierarchy.
- Print stylesheet that collapses the layout to clean black on white.

---

## Requirements

| Component | Minimum | Recommended |
| --- | --- | --- |
| WordPress | 6.0 | 6.6 or newer |
| PHP | 8.0 | 8.3 |
| MySQL | 5.7 | 8.0 |
| MariaDB | 10.3 | 10.11 |

---

## Installation

### Option A - Upload a ZIP archive (recommended)

1. Download or clone this repository.
2. Compress the `mornrain-grid` folder itself into `mornrain-grid.zip`. The archive must
   contain the theme folder, not the repository root.
3. In WordPress go to **Appearance > Themes > Add New > Upload Theme**.
4. Choose `mornrain-grid.zip`, click **Install Now**, then **Activate**.

### Option B - Copy the folder over FTP / SSH

1. Copy the whole `mornrain-grid` folder into `wp-content/themes/`.
2. Go to **Appearance > Themes** and activate `MornRain Grid`.

### Option C - Git clone (developer workflow)

```bash
cd wp-content/themes
git clone https://github.com/mornrain-lin/mornrain-grid.git
```

---

## Configuration

| What | Where | Notes |
| --- | --- | --- |
| Primary menu | Appearance > Menus | Assign a menu to the **Primary Menu** location. |
| Footer menu | Appearance > Menus | Assign a menu to the **Footer Menu** location. |
| Custom logo | Appearance > Customize > Site Identity | Optional; falls back to the site title. |
| Site title and tagline | Settings > General | Rendered in the header and footer. |
| Widgets | - | This theme registers no widget areas by design. |
| Reading settings | Settings > Reading | Feed length and front page behaviour follow core settings. |

The theme stores nothing beyond standard WordPress theme mods. Switching away
from it leaves no residue behind.

---

## File structure

```text
mornrain-grid/
|-- .github/
|   `-- workflows/
|       `-- build.yml
|-- assets/
|   |-- css/
|   |   `-- main.css
|   `-- js/
|       `-- main.js
|-- tests/
|   |-- ScaffoldTest.php
|   `-- bootstrap.php
|-- 404.php
|-- archive.php
|-- composer.json
|-- footer.php
|-- functions.php
|-- header.php
|-- index.php
|-- LICENSE
|-- page.php
|-- phpunit.xml.dist
|-- README.md
|-- search.php
|-- single.php
`-- style.css

```

---

## Development and quality checks

```bash
composer install
composer validate
composer lint   # runs php -l over every PHP file
composer test   # runs PHPUnit
```

Coding style follows the
[WordPress Coding Standards](https://developer.wordpress.org/coding-standards/wordpress-coding-standards/):
tab indentation, Yoda conditions, prefixed global functions (`mornrain_grid*`),
nonces and capability checks where relevant, and escaped output everywhere.

Continuous integration lives in `.github/workflows/build.yml`. It runs on every
push and pull request across PHP 8.1, 8.2 and 8.3: `composer install`,
`php -l` linting, PHPUnit, and finally packages a release ZIP as a build
artifact.

---

## Frequently asked questions

### How does the masonry layout work without JavaScript?

It uses the native CSS `columns` property with `break-inside: avoid` on each
card. Browsers handle the balancing, so there is nothing to initialise.

### Why do cards sometimes leave a gap?

Multi-column balancing is approximate. Adding featured images of similar aspect
ratio keeps the columns visually even.

### Which image sizes should I use?

The theme registers `mornrain-grid-feature` (1280x720) and
`mornrain-grid-card` (640x420). Both are cropped and ready for the grid.

### Does it support sticky posts?

Yes. Sticky posts behave like ordinary posts and are placed at the top of the
list by WordPress core.

### Is a sidebar available?

No. The design is a full-width editorial grid with no widget areas.

---

## Changelog

### 1.0.0

- Initial public release.

---

## License

Released under the **GNU General Public License v2 or later**.

```text
This program is free software; you can redistribute it and/or modify it under
the terms of the GNU General Public License as published by the Free Software
Foundation; either version 2 of the License, or (at your option) any later
version.

This program is distributed in the hope that it will be useful, but WITHOUT ANY
WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR A
PARTICULAR PURPOSE. See the GNU General Public License for more details.
```

See [LICENSE](LICENSE) for the full text.
*（内容由AI生成，仅供参考）*
