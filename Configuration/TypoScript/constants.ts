# -----------------------------
# | T3v Navigations Constants |
# -----------------------------

# === Plugin Constants ===

plugin {
  tx_t3vnavigations {
    contentElements {
      overviewNavigationContentElement {
        # cat=plugin/tx_t3vnavigations/contentElements/overviewNavigationContentElement; type=string; label=The content element's container.
        container = none
      }

      quickNavigationContentElement {
        # cat=plugin/tx_t3vnavigations/contentElements/quickNavigationContentElement; type=string; label=The content element's container.
        container = none
      }

      subpagesNavigationContentElement {
        # cat=plugin/tx_t3vnavigations/contentElements/subpagesNavigationContentElement; type=string; label=The content element's container.
        container = none
      }
    }

    persistence {
      # cat=plugin/tx_t3vnavigations/persistence; type=boolean; label=Enables the automatic cache clearing when changing data sets.
      enableAutomaticCacheClearing = 1

      # cat=plugin/tx_t3vnavigations/persistence; type=int+; label=The PID of the default storage.
      storagePid = 0

      # cat=plugin/tx_t3vnavigations/persistence; type=boolean; label=Updates the reference index to ensure data integrity.
      updateReferenceIndex = 1
    }

    settings {
      extbase {
        # cat=plugin/tx_t3vnavigations/settings/extbase; type=string; label=The controller extension name.
        controllerExtensionName = T3vNavigations
      }
    }

    view {
      # cat=plugin/tx_t3vnavigations/view; type=string; label=The path where the layouts are stored.
      layoutRootPath = EXT:t3v_navigations/Resources/Private/Layouts/

      # cat=plugin/tx_t3vnavigations/view; type=string; label=The path where the templates are stored.
      templateRootPath = EXT:t3v_navigations/Resources/Private/Templates/

      # cat=plugin/tx_t3vnavigations/view; type=string; label=The path where the partials are stored.
      partialRootPath = EXT:t3v_navigations/Resources/Private/Partials/
    }
  }
}

# === Includes ===

<INCLUDE_TYPOSCRIPT: source="FILE: ./Library/constants.ts">
