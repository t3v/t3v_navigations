mod {
  wizards {
    newContentElement {
      wizardItems {
        contentElements {
          elements {
            t3vnavigations_quicknavigation {
              title = LLL:EXT:t3v_navigations/Resources/Private/Language/locallang_wizard.xlf:contentElements.quickNavigationContentElement.title

              description = LLL:EXT:t3v_navigations/Resources/Private/Language/locallang_wizard.xlf:contentElements.quickNavigationContentElement.description

              iconIdentifier = t3v_navigations-quick_navigation_content_element

              tt_content_defValues {
                CType = list

                list_type = t3vnavigations_quicknavigation
              }
            }
          }

          show := addToList(t3vnavigations_quicknavigation)
        }
      }
    }
  }
}