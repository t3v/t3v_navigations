# === T3v Navigations Constants ===

plugin {
  tx_t3vnavigations {
    persistence {
      # cat=plugin/tx_t3vnavigations/persistence; type=int+; label=The PID of the storage
      # storagePid = 0
    }

    view {
      # cat=plugin/tx_t3vnavigations/view; type=string; label=Path to layouts
      layoutRootPath = EXT:t3v_navigations/Resources/Private/Layouts/

      # cat=plugin/tx_t3vnavigations/view; type=string; label=Path to templates
      templateRootPath = EXT:t3v_navigations/Resources/Private/Templates/

      # cat=plugin/tx_t3vnavigations/view; type=string; label=Path to template partials
      partialRootPath = EXT:t3v_navigations/Resources/Private/Partials/
    }

    settings {
      # ...
    }
  }
}