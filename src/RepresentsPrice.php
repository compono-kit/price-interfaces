<?php declare(strict_types=1);

namespace ComponoKit\Prices\Interfaces;

use ComponoKit\Money\Interfaces\RepresentsCurrency;
use ComponoKit\Money\Interfaces\RepresentsMoney;

interface RepresentsPrice
{
	public function getNetAmount(): RepresentsMoney;

	public function getGrossAmount(): RepresentsMoney;

	public function getVatAmount(): RepresentsMoney;

	public function getVatRate(): RepresentsVatRate;

	public function getCurrency(): RepresentsCurrency;

	public function multiply( float $quantity, \RoundingMode $roundingMode = \RoundingMode::HalfAwayFromZero ): static;

	public function divide( float $quantity, \RoundingMode $roundingMode = \RoundingMode::HalfAwayFromZero ): static;

	public function add( RepresentsPrice $price ): static;

	public function subtract( RepresentsPrice $price ): static;

	/**
	 * @return \Iterator<int,static>
	 */
	public function allocateToTargets( int $numberOfTargets ): \Iterator;

	/**
	 * @param array<int,int> $ratios
	 *
	 * @return \Iterator<int,static>
	 */
	public function allocateByRatios( array $ratios ): \Iterator;
}
