lib {
  t3v {
    navigations {
      config {
        contentElements {
          overviewNavigationContentElement {
            container = TEXT
            container {
              value = {$t3v.navigations.config.contentElements.overviewNavigationContentElement.container}
            }
          }

          quickNavigationContentElement {
            container = TEXT
            container {
              value = {$t3v.navigations.config.contentElements.quickNavigationContentElement.container}
            }
          }

          subpagesNavigationContentElement {
            container = TEXT
            container {
              value = {$t3v.navigations.config.contentElements.subpagesNavigationContentElement.container}
            }
          }
        }
      }
    }
  }
}