# === New Content Element Wizard Configuration ===

# mod {
#   wizards {
#     newContentElement {
#       wizardItems {
#         contentElements {
#           header = LLL:EXT:t3v_navigations/Resources/Private/Language/locallang_ttc.xlf:mod.wizards.newContentElement.wizardItems.contentElements.header
#
#           elements {
#             # ...
#           }
#
#           show = *
#         }
#       }
#     }
#   }
# }

# === Includes ===

<INCLUDE_TYPOSCRIPT: source="FILE: ./ContentElements/OverviewNavigationContentElement.ts">
<INCLUDE_TYPOSCRIPT: source="FILE: ./ContentElements/QuickNavigationContentElement.ts">
<INCLUDE_TYPOSCRIPT: source="FILE: ./ContentElements/SubpagesNavigationContentElement.ts">
