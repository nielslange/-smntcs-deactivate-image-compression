=== SMNTCS Deactivate image compression ===

Contributors:       nielslange
Tags:               Image compression
Stable tag:         1.9
Tested up to:       6.6
Requires PHP:       5.6
Requires at least:  2.5
License:            GPL v2 or later
License URI:        https://www.gnu.org/licenses/gpl-2.0.html

Deactivate the WordPress default image compression.

== Description ==

Deactivate the WordPress default image compression which got introduced with [WordPress 2.5](https://developer.wordpress.org/reference/hooks/jpeg_quality/).

== Installation ==

1. Upload `smntcs-deactivate-image-compression` to the `/wp-content/plugins/` directory.
2. Activate the plugin through the `Plugins` menu in WordPress.

== Purpose ==

By default, WordPress compress every uploaded image by 90%. In combination with other image optimisation tools, this can lead to pixelated images. This plugin deactivates the default image compression to avoid this issue.

== Changelog ==

= 1.9 (2024.10.19) =

- Test up to WordPress 6.6

= 1.8 (2023.10.15) =

- Test up to WordPress 6.4

= 1.7 (2022.12.03) =

- Test up to WordPress 6.1

= 1.6 (2022.05.29) =

- Test up to WordPress 6.0

= 1.5 (2022.04.21) =

- Test up to WordPress 5.8

= 1.4 (2021.12.30) =

- Test up to WordPress 5.8

= 1.3 (2021.04.26) =

- [Add build tools](https://github.com/nielslange/smntcs-deactivate-image-compression/issues/23)
- [Replace Travis CI with GitHub Actions](https://github.com/nielslange/smntcs-deactivate-image-compression/issues/25)
- [Test up to WordPress 5.7](https://github.com/nielslange/smntcs-deactivate-image-compression/issues/22)

= 1.2 (2020.05.03) =

- [Tested up to 5.4](https://github.com/nielslange/smntcs-deactivate-image-compression/issues/7)

= 1.1 (2019.12.27) =

- [Tested up to 5.3](https://github.com/nielslange/smntcs-deactivate-image-compression/issues/4)

= 1.0 (2019.07.10) =

- Initial release
