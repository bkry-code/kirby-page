#Kirby Page Plugin

`Kirby Page` is a plugin for [Kirby CMS](https://getkirby.com) that provides opinionated defaults for commonly used blueprint fields. Most of these fields are used as a dependency in other projects like the [`Kirby Blog`](https://github.com/dweidner/kirby-blog.git) plugin which provides a custom post type for blog articles.

## Requirements

- Kirby 2.3.1+
- PHP 5.5+
- [Selector](https://github.com/storypioneers/kirby-selector) if you are using the `Cover Image` field.

## Installation

### Installation using the [Kirby CLI](https://github.com/getkirby/cli)

```sh
$ cd ~/Sites/kirby-example-project
$ kirby plugin:install storypioneers/kirby-selector
$ kirby plugin:install dweidner/kirby-page
```

### Manual Installation using Git

```sh
$ cd ~/Sites/kirby-example-project
$ git submodule add https://github.com/storypioneers/kirby-selector.git site/fields/selector
$ git submodule add https://github.com/dweidner/kirby-page.git site/plugins/page
```

