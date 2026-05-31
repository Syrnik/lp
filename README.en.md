# Live Placeholder — Shop-Script Plugin

[Русская версия](README.md)

This plugin animates the placeholder text in your store's search field. Phrases appear one after another with a typewriter effect — drawing shoppers' attention to the search bar and showing them examples of good search queries.

## Requirements

- PHP 7.4 or higher
- Webasyst Shop-Script

## Installation

Install the plugin via **Store → Settings → Plugins** in the Webasyst backend, or from the [plugin catalog](https://www.webasyst.ru/store/plugin/shop/lp/).

## Settings

| Setting | Description |
|---|---|
| **Search field selector** | CSS selector of the `<input>` element whose `placeholder` attribute will be animated. Default: `input[name=query]`. Change this if your theme uses a different selector. |
| **Phrase list** | Hint phrases, one per line. The plugin types them out in the search field one by one and loops indefinitely. Leaving this field empty disables the plugin. |

## How it works

The plugin injects a script into the `<head>` of every storefront page. The script is powered by [Theater.js](https://github.com/nicktindall/theaterjs) and animates the `placeholder` attribute of all elements matching the configured selector, cycling through the configured phrases.

## Compatibility

Tested with the main Shop-Script design themes and compatible with the Search Autocomplete plugin. Correct operation with custom themes and non-standard search plugins is not guaranteed.

## License

© Serge Rodovnichenko, 2019. [Webasyst License](LICENSE).
