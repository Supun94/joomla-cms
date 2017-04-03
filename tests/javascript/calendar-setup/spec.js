/**
 * @copyright   Copyright (C) 2005 - 2017 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 * @package     Joomla
 * @subpackage  JavaScript Tests
 * @since       3.7.0
 * @version     1.0.0
 */

define(['jquery', 'testsRoot/calendar-setup/spec-setup', 'jasmineJquery'], function ($) {

	describe('Calendar-setup set for the input element', function () {
		beforeAll(function () {
			JoomlaCalendar.init(".field-calendar");
		});

		it('Should have calendar element under the input element', function () {
			expect($('body')).toContainElement('.js-calendar');
		});

		it('Should have click the correct date on next year button', function () {
			$('.field-calendar').find('.btn-next-year').trigger('click');

			expect($('.field-calendar').find('input').val()).toEqual('2017-04-03 11:34:00');
		});

		it('Should have click the correct date next month button', function () {
			$('.field-calendar').find('.btn-next-moth').trigger('click');

			expect($('.field-calendar').find('input').val()).toEqual('2017-04-03 11:34:00');
		});

		it('Should have correct date clicking on previous month button', function () {

			console.info($('.field-calendar').find('.btn-prev-month'));
			$('.field-calendar').find('.btn-prev-moth').trigger('click');

			expect($('.field-calendar').find('input').val()).toEqual('2017-04-03 11:34:00');
		});

		it('Should have the correct date clicking on today button', function () {

			console.info($('.field-calendar').find('.btn-today'));
			$('.field-calendar').find('.btn-today').trigger('click');

			expect($('.field-calendar').find('input').val()).toEqual('2017-04-03 11:34:00');
		});

	});
});
