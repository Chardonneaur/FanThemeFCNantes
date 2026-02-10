<?php

namespace Piwik\Plugins\FanThemeFCNantes;

use Piwik\Plugin;

class FanThemeFCNantes extends Plugin
{
    public function registerEvents()
    {
        return [
            'Theme.configureThemeVariables' => 'configureThemeVariables',
        ];
    }

    public function configureThemeVariables(Plugin\ThemeStyles $themeStyles)
    {
        // === BACKGROUNDS — light warm yellow-white ===
        $themeStyles->colorBackgroundBase = '#FDFBE8';
        $themeStyles->colorBackgroundContrast = '#ffffff';
        $themeStyles->colorBackgroundHighContrast = '#1A472A';
        $themeStyles->colorBackgroundTinyContrast = '#FBF8D6';
        $themeStyles->colorBackgroundLowContrast = '#F5F0C0';

        // === TEXT — dark green tones ===
        $themeStyles->colorText = '#0E2E1A';
        $themeStyles->colorTextLight = '#1A472A';
        $themeStyles->colorTextLighter = '#2D6B42';
        $themeStyles->colorTextContrast = '#1A472A';

        // === BRAND — canari yellow ===
        $themeStyles->colorBrand = '#FCD209';
        $themeStyles->colorBrandContrast = '#0E2E1A';

        // === SERIES — FCN green for graphs ===
        $themeStyles->colorBaseSeries = '#1A472A';

        // === LINKS — FC Nantes green ===
        $themeStyles->colorLink = '#1A6B35';

        // === HEADER — deep green with canari yellow text ===
        $themeStyles->colorHeaderBackground = '#1A472A';
        $themeStyles->colorHeaderText = '#FCD209';

        // === HEADLINES ===
        $themeStyles->colorHeadlineAlternative = '#1A472A';

        // === BORDERS — soft green-gold ===
        $themeStyles->colorBorder = '#D4CE8A';

        // === CODE ===
        $themeStyles->colorCode = '#1A472A';
        $themeStyles->colorCodeBackground = '#FDFBE8';

        // === MENU ===
        $themeStyles->colorMenuContrastText = '#1A472A';
        $themeStyles->colorMenuContrastTextSelected = '#0E2E1A';
        $themeStyles->colorMenuContrastTextActive = '#1A6B35';
        $themeStyles->colorMenuContrastBackground = '#ffffff';

        // === WIDGETS ===
        $themeStyles->colorWidgetBackground = '#ffffff';
        $themeStyles->colorWidgetBorder = '#E8E4B0';
        $themeStyles->colorWidgetTitleText = '#0E2E1A';
        $themeStyles->colorWidgetTitleBackground = '#ffffff';
        $themeStyles->colorWidgetExportedBackgroundBase = '#ffffff';

        // === FOCUS ===
        $themeStyles->colorFocusRing = '#FCD209';
        $themeStyles->colorFocusRingAlternative = '#1A6B35';
    }
}
