# CHANGELOG

## [2.0.0] - 2026-10-14

### Changed
* [BC] Requires PHP 8.5 and `compono-kit/money-interfaces` ^2.0
* [BC] `RepresentsPrice::multiply()` and `divide()` accept an optional `\RoundingMode`, the default is `\RoundingMode::HalfAwayFromZero`
* [BC] Arithmetic methods of `RepresentsPrice` and `RepresentsTotalPrice` return `static`

### Added
* [BC] `RepresentsTotalPrice::subtractPrice()`
* [BC] `RepresentsTotalPrice::getMoneyFactory()`
