# Codetrappers AI Alt Text

`codetrappers-ai-alt-text` is a ai-enabled wordpress plugin for the Codetrappers project set.
Starter AI plugin for generating image alt text and captions from media context.
The codebase is scaffolded to be a clean starting point, not a complete production feature.

## Project Summary

- Slug: `codetrappers-ai-alt-text`
- Type: AI-enabled WordPress plugin
- Focus: ai, media, accessibility

## What This Repository Includes

- Plugin bootstrap file with WordPress headers
- Starter admin UI for prompt submission in wp-admin
- Replaceable placeholder AI response flow
- Settings structure for provider and model configuration

## Recommended Project Structure

- `<slug>.php`: plugin bootstrap and constants
- `includes/class-<slug>.php`: admin UI and AI placeholder flow
- `composer.json`: package metadata
- `README.md`: project documentation

## Setup

- Copy the folder into `wp-content/plugins` and activate it.
- Open the generated admin page and test the placeholder generation flow.
- Replace the mock response method with a real provider integration.

## How To Extend It

- Activate `codetrappers-ai-alt-text` from the Plugins screen.
- Use `codetrappers-ai-alt-text.php` as the primary bootstrap file for extension work.
- Keep feature logic inside dedicated classes rather than expanding the root file.

## Development Notes

- The generated code favors readability and a low-friction starting structure.
- Credentials, provider integrations, persistence rules, and deployment concerns still need to be implemented for real use.
- Review capability checks, sanitization, and data storage choices before using any starter in production.

## Roadmap

- Integrate a real LLM provider and secure API credential storage.
- Add request logging, moderation, and rate limiting.
- Define prompt templates and structured output handling.

## WordPress Usage

- Copy the folder into `wp-content/plugins`.
- Activate the plugin from wp-admin.
- Extend the main class under `includes/` or split logic into additional classes as the plugin grows.

## Production Hardening Checklist

- Add nonce handling and permission checks for every form or action.
- Add automated tests and linting before release.
- Validate plugin behavior against the target WordPress and PHP versions.

## AI Integration Notes

- Replace the placeholder generation method with a real provider client.
- Store provider credentials securely and avoid hardcoding API keys.
- Add prompt logging, rate limits, and moderation rules before exposing AI features to content teams.
