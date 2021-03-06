<?php
/**
 * Observer
 * 
 * @file 			RedBean/Observer.php
 * @desc			Part of the observer pattern in RedBean
 * @author			Gabor de Mooijand the RedBeanPHP community
 * @license			BSD/GPLv2
 *
 * copyright (c) G.J.G.T. (Gabor) de Mooij and the RedBeanPHP Community.
 * This source file is subject to the BSD/GPLv2 License that is bundled
 * with this source code in the file license.txt.
 */
interface RedBean_Observer {
	/**
	 * Part of the RedBean Observer Infrastructure.
	 * The on-event method is called by an observable once the
	 * event the observer has been registered for occurs.
	 * Once the even occurs, the observable will signal the observer
	 * using this method, sending the event name and the bean or
	 * an information array.
	 *
	 * @param string $eventname
	 * @param RedBean_OODBBean mixed $info
	 */
	public function onEvent( $eventname, $bean );
}