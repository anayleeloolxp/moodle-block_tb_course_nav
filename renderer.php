<?php
// This file is part of The Course Module Navigation Block
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Renderer for modulenavigation.
 *
 * @package    block_tb_course_nav
 * @copyright  2020 Leeloo LXP (https://leeloolxp.com)
 * @copyright  based on work by 2019 Pimenko <contact@pimenko.com> <pimenko.com>
 * @author     Leeloo LXP <info@leeloolxp.com>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

/**
 * Define render navigation
 *
 * @package    block_tb_course_nav
 * @copyright  2020 Leeloo LXP (https://leeloolxp.com)
 * @copyright  based on work by 2019 Pimenko <contact@pimenko.com> <pimenko.com>
 * @author     Leeloo LXP <info@leeloolxp.com>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class block_tb_course_nav_nav_renderer extends plugin_renderer_base {

    /**
     *
     * Render HTML template.
     *
     * @param stdClass|stdObject $template
     * @return bool|string
     * @throws moodle_exception
     */
    public function render_nav($template) {
        if (isset($template->config->show_current_section) && ($template->config->show_current_section == 1)) {
            return $this->render_from_template(
                'block_tb_course_nav/coursenav_onesection',
                $template
            );
        } else {
            return $this->render_from_template(
                'block_tb_course_nav/coursenav',
                $template
            );
        }
    }
}
