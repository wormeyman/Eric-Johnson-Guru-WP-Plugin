# Eric Johnson Guru Plugin — Project Notes

## Release Process

1. Make your changes and commit
2. Bump `Version:` in `ericjohnsonguru.php` and `Stable tag:` in `readme.txt`
3. Commit, push, then tag and push: `git tag v2.X.0 && git push origin v2.X.0`
4. GitHub Actions workflow (`.github/workflows/release.yml`) automatically:
   - Patches version numbers in `ericjohnsonguru.php` and `readme.txt` from the tag
   - Builds `Eric-Johnson-Guru-WP-Plugin.zip` with correct directory structure
   - Creates a GitHub release with the zip attached
5. WordPress sites pick up the update via plugin-update-checker (v5, using release assets)

**Note:** Version must also be bumped in source (not just the tag) to support clients still running the old v4 update checker, which downloads the source zip instead of the release asset.

## Project Structure

- `ericjohnsonguru.php` — main plugin file (update checker, WP Rocket config, admin CSS)
- `readme.txt` — WordPress plugin readme
- `plugin-update-checker/` — vendored PUC v5 library
- `.github/workflows/release.yml` — release automation
