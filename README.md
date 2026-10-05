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
mornrain-grid/             # MornRain Grid 主题根目录：杂志式多栏排版
|-- .github/               # GitHub 仓库配置目录
|   `-- workflows/         # GitHub Actions 工作流目录
|       `-- build.yml      # CI 工作流：在 PHP 8.1–8.3 上 lint、跑 PHPUnit 并打包 ZIP 构件
|-- assets/                # 前端静态资源目录
|   |-- css/               # 样式资源目录
|   |   `-- main.css       # 主样式：设计令牌、原生 CSS 多列瀑布流归档与响应式列数
|   `-- js/                # 脚本资源目录
|       `-- main.js        # 渐进增强脚本：移动端菜单开合与宽表格横向滚动
|-- tests/                 # PHPUnit 测试目录
|   |-- ScaffoldTest.php   # 脚手架冒烟测试：断言 README、LICENSE、composer.json 与入口文件存在
|   `-- bootstrap.php      # PHPUnit 引导文件：存在时才加载 Composer 自动加载器
|-- 404.php                # 404 模板：未找到提示与站内搜索表单
|-- archive.php            # 归档模板：分类/标签/日期归档的多栏卡片列表
|-- composer.json          # Composer 元数据与 lint/test 脚本
|-- footer.php             # 页脚模板：页脚菜单与版权信息
|-- functions.php          # 主题初始化：导航菜单、缩略图、feature(1280x720)/card(640x420) 两种图尺寸与资源挂载
|-- header.php             # 头部模板：head 元信息、站点品牌区与主导航
|-- index.php              # 首页模板：多栏杂志卡片循环
|-- LICENSE                # GPL-2.0-or-later 许可证全文
|-- page.php               # 独立页面模板：页面标题与正文
|-- phpunit.xml.dist       # PHPUnit 配置，扫描 tests 目录
|-- README.md              # 主题说明文档
|-- search.php             # 搜索结果模板：关键词标题与结果卡片列表
|-- single.php             # 单篇文章模板：标题、元信息、特色图与正文
`-- style.css              # 主题头信息与基础样式，先于 main.css 加载
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
