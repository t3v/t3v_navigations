# -----------------------------
# | T3v Navigations Constants |
# -----------------------------

t3v {
  navigations {
    config {
      contentElements {
        overviewNavigationContentElement {
          # cat=t3v/navigations/config/contentElements/overviewNavigationContentElement; type=string; label=The Content Element's container
          container =
        }

        quickNavigationContentElement {
          # cat=t3v/navigations/config/contentElements/quickNavigationContentElement; type=string; label=The Content Element's container
          container =
        }

        subpagesNavigationContentElement {
          # cat=t3v/navigations/config/contentElements/subpagesNavigationContentElement; type=string; label=The Content Element's container
          container =
        }
      }
    }
  }
}

# === Plugin Constants ===

plugin {
  tx_t3vnavigations {
    persistence {
      # cat=plugin/tx_t3vnavigations/persistence; type=boolean; label=Enables the automatic cache clearing when changing data sets
      enableAutomaticCacheClearing = 1

      # cat=plugin/tx_t3vnavigations/persistence; type=int+; label=The PID of the default storage
      storagePid = 0

      # cat=plugin/tx_t3vnavigations/persistence; type=boolean; label=Updates the reference index to ensure data integrity
      updateReferenceIndex = 1
    }

    settings {
      extbase {
        # cat=plugin/tx_t3vnavigations/settings/extbase; type=string; label=The controller extension name
        controllerExtensionName = T3vNavigations
      }
    }

    view {
      # cat=plugin/tx_t3vnavigations/view; type=string; label=The path where the layouts are stored
      layoutRootPath = EXT:t3v_navigations/Resources/Private/Layouts/

      # cat=plugin/tx_t3vnavigations/view; type=string; label=The path where the templates are stored
      templateRootPath = EXT:t3v_navigations/Resources/Private/Templates/

      # cat=plugin/tx_t3vnavigations/view; type=string; label=The path where the partials are stored
      partialRootPath = EXT:t3v_navigations/Resources/Private/Partials/
    }
  }
}

# === Includes ===

<INCLUDE_TYPOSCRIPT: source="FILE: ./Library/constants.ts">