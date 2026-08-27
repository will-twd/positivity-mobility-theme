# positivity-mobility theme — agent reference

Technical/structural reference for working in this repo. Read this
before making changes. For working conventions and design-system
discipline, see `APPROACH.md` — that's process, this is structure. Don't
duplicate between the two.

## What this is

A Roots Sage 11 classic WordPress theme (not a block/FSE theme) using
Laravel Blade for templating, Tailwind v4 for CSS, and Vite for the
build. Standard WordPress install (`wp-content/`), not Bedrock.

⚠️ **If any installed WordPress-agent skill mentions FSE, block themes,
`theme.json` site-editor patterns, or `wp-block-themes` — it does not
apply here and should be ignored.** This is a classic theme with a
templating engine; there is no Site Editor involved. FSE was deliberately
rejected for this project (see the vault's `notes-technical.md` if the
full reasoning is needed) — don't reintroduce it via a skill that assumes
FSE by default.

## Working conventions — small steps, manual commits

**Work in small, single-purpose increments. Never scaffold multiple
pages, or a page plus its full content, in one pass.** Commits happen
manually, in between changes — a request like "scaffold the pages" or
"build out the site" should become one page, or even one section of one
page, at a time, stopping there rather than continuing on to fill out
the rest of the scope unprompted. If a request implies a large multi-file
change, do the smallest reasonable first piece and stop for review before
continuing, even if the rest of the change seems obvious or quick.

## Folder structure — nothing like a normal WordPress theme

```
positivity-mobility/
├── app/              # Theme PHP — PSR-4 autoloaded, App\ namespace
│   ├── Providers/    # Service providers
│   ├── View/         # View models / composers
│   ├── filters.php
│   └── setup.php
├── public/           # BUILT ASSETS — never edit, never commit changes here
├── resources/
│   ├── css/app.css   # Tailwind v4 CSS-first config — @theme lives here,
│   │                 # no tailwind.config.js
│   ├── fonts/
│   ├── images/
│   ├── js/
│   └── views/        # ← Blade templates live HERE, not the theme root
│       ├── components/  # <x-name> Blade components
│       ├── forms/
│       ├── layouts/     # base/app layout(s), e.g. app.blade.php
│       └── partials/    # header, footer, nav, etc.
├── vendor/           # Composer — never edit directly
├── node_modules/     # never upload/deploy this
├── composer.json     # PSR-4 autoload config, platform PHP pin, license field
├── functions.php     # Bootloader — initialises the theme, not where logic goes
├── index.php         # Template wrapper for WordPress's rendering, not a real template
├── package.json
├── style.css         # Theme metadata only (Theme Name header lives here —
│                     # currently shows Sage's placeholder, fix before any
│                     # portfolio screenshots)
└── vite.config.js
```

The three things most likely to trip up a normal-WordPress instinct:
- Templates are in `resources/views/*.blade.php` (with `layouts/`,
  `partials/`, `components/` subfolders), not `page.php` / `single.php`
  in the theme root.
- `functions.php` and `index.php` are near-empty — `functions.php`
  bootstraps the theme, `index.php` just wraps WordPress's template
  rendering. Real theme logic goes in `app/` (PSR-4, `App\` namespace).
- `public/` and `node_modules/` are generated/local-only. Never edit
  `public/` directly (lost on next build), never deploy `node_modules/`.

## Stack

| Layer | Choice |
|---|---|
| Local environment | DDEV (Docker, WSL2/Ubuntu), project `posmob-v1` |
| CMS | WordPress, standard install |
| Theme | Roots Sage 11.2.1 (classic theme) |
| Templating | Laravel Blade |
| CSS | Tailwind v4, CSS-first config in `resources/css/app.css` |
| Build tool | Vite (HMR in dev) |
| Framework layer | Acorn v6.2.0 (Laravel container inside WordPress) |
| Custom fields | Deferred — no plugin chosen, decide only when a real
  editable area needs one (see below) |
| Version control | Git — theme directory only, not the WordPress install |
| Hosting | SiteGround |
| Deployment | GitHub Actions build (Composer + npm) → rsync to SiteGround |

## PHP version — 8.4, not 8.2

Sage 11.2.1 requires PHP >= 8.3. Installing under 8.2 does **not** fail —
it silently resolves an older Sage (11.1.0) instead, which is easy to
miss. DDEV is pinned to 8.4. Production (SiteGround) must also move to
8.4 before deploy — this is a hard requirement of Sage, not a nice-to-have,
and is still an open item (see the vault's progress-tracker for status).

## Composer / npm — always inside DDEV

Never run bare `composer` or `npm` from the WSL host shell. Use
`ddev composer ...`, `ddev npm ...`, or work inside `ddev ssh`. A bare
host command can silently hit a different PHP/Node version than the
container's.

## Custom fields — deliberately deferred

No fields plugin is chosen yet, and none should be added speculatively.
Build templates in Blade first; only reach for a fields plugin when an
actual editable content area needs one. If/when it comes up: **Secure
Custom Fields** (free, covers Repeater/Flexible Content/Options
Pages/ACF Blocks) or **Carbon Fields** (free, code-first, no admin UI)
are the two live options — no paid plugin is required for this project.

## File / DB split — the core mental model

- **Filesystem = code** (theme files, field definitions) → version
  controlled, deployed via CI.
- **Database = content** (pages, posts, field values, users) → local
  only, never migrated via git, never pushed from dev to production.
- Don't create fields or custom post types by clicking around in
  wp-admin on production — that's structure and belongs in code.
- Contact details (phone, email, socials) belong in an editable field or
  options page, never hardcoded in a Blade template — keeps the public
  repo free of the client's personal info and lets him update it without
  a code change.

## Deployment

Sage requires a build step now — the theme can't just be rsynced as-is.
Production needs: `npm run build`, `composer install --no-dev
--optimize-autoloader`, `wp acorn optimize`, then upload everything
except `node_modules/`. This runs via GitHub Actions, not manually.

## VS Code / Intelephense — expected, not a bug

Intelephense is configured to skip `.blade.php` files entirely (see the
vault's `change-log/vscode-global-settings.md` for the full reasoning).
This means **no PHP hover/autocomplete/diagnostics inside `.blade.php`
files**, including inside `@php ... @endphp` blocks — that's intentional,
not something to fix. Ordinary `.php` files in `app/` keep full
Intelephense support as normal.

## Related

- `APPROACH.md` — working conventions and design-system discipline for
  this repo. Read alongside this file, not instead of it.
- `PROJECT-BRIEF.md` — the client, the site map, styling steer, and
  page-by-page content requirements. Read this before building any page
  — it's what to build, where this file only covers how the repo works.
- `BUILD-LOG.md` — running record of what's actually been built.
- The vault's `clients/positivity-mobility/notes-technical.md` — full
  reasoning behind every decision above, if more depth is needed than
  this file carries. Not accessible from a plain Claude Code session —
  ask Will to paste the relevant section if it's actually needed.
