# preview-in-playground-button-v3-example-monorepo

Level 2 example of the WordPress Playground "Preview in Playground" v4 reusable workflows.

A monorepo with two plugins (`site-toolkit`, `site-analytics`) that should always be installed and activated together. Demonstrates the `blueprint:` template input with `{{ARTIFACT_URL:<name>}}` placeholders.

## Files

- `plugins/site-toolkit/` and `plugins/site-analytics/` — the two plugins.
- `.github/workflows/pr-preview-build.yml` — produces both zips.
- `.github/workflows/pr-preview-publish.yml` — exposes both, installs both via a blueprint template.

Both reusable workflows use `WordPress/action-wp-playground-pr-preview` at `@v4`.
Update the build and publish references together when changing versions.
The repository name retains `v3` so existing links keep working.
