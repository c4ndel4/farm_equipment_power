# farmOS Equipment Power

Provides Power Sources to the equipment Asset in farmOS 2.x.

This module is an add-on for the [farmOS](http://drupal.org/project/farm)
distribution.

## Getting started

## Installation

Install as you would normally install a contributed drupal module. See:
https://www.drupal.org/docs/extending-drupal/installing-modules for further
information.

## Features

### Assets

Adds fields to equipment asset:
- `is_powered` (boolean): Indicates if the equipment requires power.
- `power_type` (string): In case `is_powered` is true, provides a list of power sources to select from.
	+ combustion
	+ electric
	+ animal
	+ human
	+ other

## Maintainers

Current maintainers:
* Hadrián Candela (c4ndel4) - https://github.com/c4ndel4
