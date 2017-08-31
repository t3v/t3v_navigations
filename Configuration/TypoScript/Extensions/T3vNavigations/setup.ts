# === T3v Navigations Configuration ===

plugin {
  tx_t3vnavigations {
    persistence {
      enableAutomaticCacheClearing = 1

      updateReferenceIndex = 1

      # storagePid = {$plugin.tx_t3vnavigations.persistence.storagePid}

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
    }

    view {
      layoutRootPath = {$plugin.tx_t3vnavigations.view.layoutRootPath}

      templateRootPath = {$plugin.tx_t3vnavigations.view.templateRootPath}

      partialRootPath = {$plugin.tx_t3vnavigations.view.partialRootPath}
    }

    settings {
      # ...
    }
  }
}