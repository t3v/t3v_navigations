# === Overview Navigation Content Element Wizard Configuration ===

mod {
  wizards {
    newContentElement {
      wizardItems {
        contentElements {
          elements {
            t3vnavigations_overviewnavigation {
              title = LLL:EXT:t3v_navigations/Resources/Private/Language/locallang_ttc.xlf:contentElements.overviewNavigationContentElement.title

              description = LLL:EXT:t3v_navigations/Resources/Private/Language/locallang_ttc.xlf:contentElements.overviewNavigationContentElement.description

              iconIdentifier = t3v_navigations-overview_navigation_content_element

              tt_content_defValues {
                CType = list

                list_type = t3vnavigations_overviewnavigation
              }
            }
          }

          show := addToList(t3vnavigations_overviewnavigation)
        }
      }
    }
  }
}
