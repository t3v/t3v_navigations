# === T3v Navigations Configuration ===

plugin {
  tx_t3vnavigations {
    persistence {
      classes {
        T3v\T3vNavigations\Domain\Model\OverviewNavigationItem {
          mapping {
            tableName = tx_t3vnavigations_domain_model_overview_navigation_item

            # columns {
            #   foo.mapOnProperty = foo
            #   bar.mapOnProperty = bar
            # }
          }
        }

        T3v\T3vNavigations\Domain\Model\QuickNavigationItem {
          mapping {
            tableName = tx_t3vnavigations_domain_model_quick_navigation_item

            # columns {
            #   foo.mapOnProperty = foo
            #   bar.mapOnProperty = bar
            # }
          }
        }
      }

      enableAutomaticCacheClearing = {$plugin.tx_t3vnavigations.persistence.enableAutomaticCacheClearing}

      storagePid = {$plugin.tx_t3vnavigations.persistence.storagePid}

      updateReferenceIndex = {$plugin.tx_t3vnavigations.persistence.updateReferenceIndex}
    }

    settings {
      # ...
    }

    view {
      layoutRootPaths {
        0 = {$plugin.tx_t3vnavigations.view.layoutRootPath}
      }

      templateRootPaths {
        0 = {$plugin.tx_t3vnavigations.view.templateRootPath}
      }

      partialRootPaths {
        0 = {$plugin.tx_t3vnavigations.view.partialRootPath}
      }
    }
  }
}