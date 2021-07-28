@if (!empty($secondaryMenuItems))
    @header([
        'id' => 'fixed-header',
        'classList' => [
            'site-header', isset($classList) ? is_array($classList) ? implode(' ', $classList) : $classList : '',
        ],
        'context' => 'siteHeader'
    ])
    <div class="c-header__menu c-header__menu--secondary u-padding--05 u-display--none@xs
                    u-display--none@sm u-display--none@md u-print-display--none">
        <div class="o-container">
            <nav role="navigation" aria-label="{{ $lang->primaryNavigation }}">
                @nav([
                    'items' => $secondaryMenuItems,
                    'direction' => 'horizontal',
                    'classList' => ['u-flex-wrap--no-wrap', 'u-justify-content--space-between']
                ])
                @endnav
            </nav>
        </div>
    </div>

    @endheader
@endif
