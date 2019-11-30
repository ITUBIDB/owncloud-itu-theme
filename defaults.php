<?php
/**
 * @author Björn Schießle <schiessle@owncloud.com>
 * @author Jan-Christoph Borchardt, http://jancborchardt.net
 * @copyright Copyright (c) 2018, ownCloud GmbH
 * @license AGPL-3.0
 *
 * This code is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License, version 3,
 * as published by the Free Software Foundation.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public License, version 3,
 * along with this program.  If not, see <http://www.gnu.org/licenses/>
 */

class OC_Theme {

	/**
	 * Returns the base URL
	 * @return string URL
	 */
	public function getBaseUrl() {
		return 'https://kovan.itu.edu.tr';
	}

	/**
	 * Returns the URL where the sync clients are listed
	 * @return string URL
	 */
	public function getSyncClientUrl() {
		return 'http://ftp.itu.edu.tr/Utility/Kovan/';
	}

	/**
	 * Returns the URL to the App Store for the iOS Client
	 * @return string URL
	 */
	public function getiOSClientUrl() {
		return 'https://itunes.apple.com/tr/app/itu-kovan/id1101081766';
	}

	/**
	 * Returns the AppId for the App Store for the iOS Client
	 * @return string AppId
	 */
	public function getiTunesAppId() {
		return '1101081766';
	}

	/**
	 * Returns the URL to Google Play for the Android Client
	 * @return string URL
	 */
	public function getAndroidClientUrl() {
		return 'https://play.google.com/store/apps/details?id=tr.edu.itu.itukovan';
	}

	/**
	 * Returns the documentation URL
	 * @return string URL
	 */
	public function getDocBaseUrl() {
		return 'https://doc.owncloud.org';
	}

	/**
	 * Returns the title
	 * @return string title
	 */
	public function getTitle() {
		return 'İTÜKOVAN';
	}

	/**
	 * Returns the short name of the software
	 * @return string title
	 */
	public function getName() {
		return 'İTÜKOVAN';
	}

	/**
	 * Returns the short name of the software containing HTML strings
	 * @return string title
	 */
	public function getHTMLName() {
		return 'İTÜ<strong>KOVAN</strong>';
	}

	/**
	 * Returns entity (e.g. company name) - used for footer, copyright
	 * @return string entity name
	 */
	public function getEntity() {
		return 'İTÜ/BİDB';
	}

	/**
	 * Returns entity (e.g. company name) website - used for footer, copyright
	 * @return string entity name
	 */
	public function getEntityWebsite() {
		return 'https://bidb.itu.edu.tr';
	}

	/**
	 * Returns slogan
	 * @return string slogan
	 */
	public function getSlogan() {
		return 'İTÜ<strong>KOVAN</strong> - Bulut Depolama Sistemi';
	}

	/**
	 * Returns logo claim
	 * @return string logo claim
	 */
	public function getLogoClaim() {
		return '';
	}

	/**
	 * Returns short version of the footer
	 * @return string short footer
	 */
	public function getShortFooter() {
		return
			'<a href="'.$this->getEntityWebsite().'" target="_blank\">'.$this->getEntity().'</a>'.
			'<br/>' . '<a href="'.$this->getBaseUrl().'">'.$this->getSlogan().'</a>' .
			'<div id="clientsbox" class="clientsbox">
				<a href="http://ftp.itu.edu.tr/Utility/Kovan/" rel="noreferrer" target="_blank">
					<img src="/core/img/desktopapp.svg" alt="Desktop client">
				</a>
				<a href="https://play.google.com/store/apps/details?id=tr.edu.itu.itukovan" rel="noreferrer" target="_blank">
					<img src="/core/img/googleplay.png" alt="Android app">
				</a>
				<a href="https://itunes.apple.com/tr/app/itu-kovan/id1101081766" rel="noreferrer" target="_blank">
					<img src="/core/img/appstore.svg" alt="iOS app">
				</a>
			</div>';
	}

	/**
	 * Returns long version of the footer
	 * @return string long footer
	 */
	public function getLongFooter() {
		return
			'<a href="'.$this->getEntityWebsite().'" target="_blank\">'.$this->getEntity().'</a>'.
			'<br/>' . '<a href="'.$this->getBaseUrl().'">'.$this->getSlogan().'</a>' .
			'<div id="clientsbox" class="clientsbox">
				<a href="http://ftp.itu.edu.tr/Utility/Kovan/" rel="noreferrer" target="_blank">
					<img src="/core/img/desktopapp.svg" alt="Desktop client">
				</a>
				<a href="https://play.google.com/store/apps/details?id=tr.edu.itu.itukovan" rel="noreferrer" target="_blank">
					<img src="/core/img/googleplay.png" alt="Android app">
				</a>
				<a href="https://itunes.apple.com/tr/app/itu-kovan/id1101081766" rel="noreferrer" target="_blank">
					<img src="/core/img/appstore.svg" alt="iOS app">
				</a>
			</div>';
	}

	public function buildDocLinkToKey($key) {
		return $this->getDocBaseUrl() . '/server/10.0/go.php?to=' . $key;
	}


	/**
	 * Returns mail header color
	 * @return string
	 */
	public function getMailHeaderColor() {
		return '#002855';
	}
}
