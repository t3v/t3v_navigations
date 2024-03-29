[T3v Navigations]
=================

**The navigations extension of TYPO3voilà.**

Overview
--------

### Content Elements

#### Body

* Mobile Navigation Content Element
* Header Navigation Content Element
* Main Navigation Content Element
* Side Navigation Content Element *
* Footer Navigation Content Element

#### Misc

* Overview Navigation Content Element *
* Quick Navigation Content Element
* Flyout Navigation Content Element
* L10n Navigation Content Element
* Vendor Navigation Content Element

### Models

* Flyout Navigation Item
* Footer Navigation Item
* Overview Navigation Item
* Quick Navigation Item
* Vendor Navigation Item

Dependencies
------------

* TYPO3 CMS 9.5 or greater
* T3v Base extension

Installation
------------

1. Add T3v Navigations as dependency to the [Composer] configuration
2. Run `composer install` or `composer update` to install all dependencies with Composer
3. Include the TypoScript for T3v Navigations

Development
-----------

### Setup

```sh
git clone https://github.com/t3v/t3v_navigations.git && cd t3v_navigations

./Scripts/Setup.sh
```

### Testing

```sh
./Scripts/Tests.sh
./Scripts/Tests/Unit.sh
./Scripts/Tests/Functional.sh
./Scripts/Tests/Migrate.sh
```

Bug Reports
-----------

GitHub Issues are used for managing bug reports and feature requests. If you run into issues, please search the issues and submit new
problems [here].

Versioning
----------

This project aims to adhere to [Semantic Versioning 2.0.0]. Violations of this scheme should be reported as bugs. Specifically, if a minor
or patch version is being released that breaks backward compatibility, that version should be immediately yanked and / or a new version
should be immediately released that restores compatibility.

Credits
-------

### Icons

* [Browser icon (1)]
* [Browser icon (2)]
* [Links icon]
* [List icon]

Icons used made by [Freepik] and [Smashicons] from [Flaticon].

License
-------

T3v Navigations is released under the [MIT License (MIT)], see [LICENSE].

[Acceptance testing TYPO3]: https://wiki.typo3.org/Acceptance_testing "Acceptance testing TYPO3"
[Automated testing TYPO3]: https://wiki.typo3.org/Automated_testing "Automated testing TYPO3"
[Browser icon (1)]: https://www.flaticon.com/free-icon/browser_140800 "Browser icon (1)"
[Browser icon (2)]: https://www.flaticon.com/free-icon/browser_140808 "Browser icon (2)"
[Composer]: https://getcomposer.org "Dependency Manager for PHP"
[Flaticon]: https://www.flaticon.com "Flaticon"
[Freepik]: https://www.flaticon.com/authors/freepik "Freepik"
[Functional testing TYPO3]: https://wiki.typo3.org/Functional_testing "Functional testing TYPO3"
[here]: https://github.com/t3v/t3v_navigations/issues "GitHub Issue Tracker"
[LICENSE]: https://raw.githubusercontent.com/t3v/t3v_navigations/master/LICENSE "License"
[Links icon]: https://www.flaticon.com/free-icon/links_358937 "Links icon"
[List icon]: https://www.flaticon.com/free-icon/list_140881 "List icon"
[MIT License (MIT)]: http://opensource.org/licenses/MIT "The MIT License (MIT)"
[Semantic Versioning 2.0.0]: http://semver.org "Semantic Versioning 2.0.0"
[Smashicons]: https://www.flaticon.com/authors/smashicons "Smashicons"
[T3v Navigations]: https://t3v.github.io/t3v_navigations/ "The navigations extension of TYPO3voilà."
[TYPO3voilà]: https://github.com/t3v "“UH LÁLÁ, TYPO3!”"
[Unit Testing TYPO3]: https://wiki.typo3.org/Unit_Testing_TYPO3 "Unit testing TYPO3"
