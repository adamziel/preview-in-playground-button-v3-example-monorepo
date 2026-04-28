# preview-in-playground-button-v3-example-monorepo

Level 2 example of the WordPress Playground "Preview in Playground" v3 reusable workflows.

A monorepo with two plugins (`site-toolkit`, `site-analytics`) that should always be installed and activated together. Demonstrates the `blueprint:` template input with `{{ARTIFACT_URL:<name>}}` placeholders.

## Files

- `plugins/site-toolkit/` and `plugins/site-analytics/` — the two plugins.
- `.github/workflows/pr-preview-build.yml` — produces both zips.
- `.github/workflows/pr-preview-publish.yml` — exposes both, installs both via a blueprint template.

The reusable workflows are pinned to the in-development branch
`adamziel/build-command-reusable-workflows` of
`WordPress/action-wp-playground-pr-preview`. Repin to `@v3` once that lands.
