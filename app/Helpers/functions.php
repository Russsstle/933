<?php
/**
 * @param $url
 */
function active($url) {
  return request()->is($url) ? 'active' : '';
}
?>
