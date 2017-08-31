# === T3v Navigations Configuration ===

plugin {
  tx_t3vnavigations {
    persistence {
      enableAutomaticCacheClearing = 1

      updateReferenceIndex = 1

      # storagePid = {$plugin.tx_t3vnavigations.persistence.storagePid}
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