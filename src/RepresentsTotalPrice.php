<?php declare(strict_types=1);

namespace ComponoKit\Prices\Interfaces;

use ComponoKit\Money\Interfaces\BuildsMoneys;
use ComponoKit\Money\Interfaces\RepresentsCurrency;
use ComponoKit\Money\Interfaces\RepresentsMoney;

interface RepresentsTotalPrice
{
	public function addTotalPrice( RepresentsTotalPrice $totalPrice ): static;

	public function addPrice( RepresentsPrice $price ): static;

	public function subtractPrice( RepresentsPrice $price ): static;

	public function getTotalGrossAmount(): RepresentsMoney;

	public function getTotalNetAmount(): RepresentsMoney;

	public function getTotalVatAmount(): RepresentsMoney;

	/**
	 * @return RepresentsVatRate[]
	 */
	public function getVatRates(): array;

	public function getCurrency(): RepresentsCurrency;

	public function getMoneyFactory(): BuildsMoneys;

	/**
	 * @return array<int, RepresentsPrice[]> An array where keys are VAT rates (as integers)
	 *                                        and values are arrays of RepresentsPrice objects
	 */
	public function getPricesGroupedByVatRates(): array;

	/**
	 * @return array<int, RepresentsPrice>
	 */
	public function getPrices(): array;
}
