<?php
/*
Plugin Name: Remove Header Generator
Plugin URI: http://www.hikaro.com
Description: Plugins that makes  your blog more safe by removing the 'generator' meta tag from wp_head().
Version: 1.0
Author: hikaro
Author URI: http://www.hikaro.com

	Copyright 2010  HIKARO  (email : info@hikaro.com)

    Remove Header Generator Plugins is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA

*/

remove_action('wp_head', 'wp_generator');
?>