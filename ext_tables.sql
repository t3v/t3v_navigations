-- Table structure for table `tx_t3vnavigations_domain_model_flyout_navigation_item`
CREATE TABLE tx_t3vnavigations_domain_model_flyout_navigation_item (
  name varchar(255) DEFAULT '' NOT NULL,
  label varchar(255) DEFAULT '' NOT NULL,
  type varchar(32) DEFAULT 'default' NOT NULL,
  handle varchar(255) DEFAULT '' NOT NULL,
  content text NOT NULL,
  layout varchar(32) DEFAULT 'default' NOT NULL,
  sorting int(11) DEFAULT '0' NOT NULL
);

-- Table structure for table `tx_t3vnavigations_domain_model_footer_navigation_item`
CREATE TABLE tx_t3vnavigations_domain_model_footer_navigation_item (
  name varchar(255) DEFAULT '' NOT NULL,
  label varchar(255) DEFAULT '' NOT NULL,
  type varchar(32) DEFAULT 'default' NOT NULL,
  handle varchar(255) DEFAULT '' NOT NULL,
  page int(11) DEFAULT '0' NOT NULL,
  link varchar(255) DEFAULT '' NOT NULL,
  layout varchar(32) DEFAULT 'default' NOT NULL,
  sorting int(11) DEFAULT '0' NOT NULL
);

-- Table structure for table `tx_t3vnavigations_domain_model_overview_navigation_item`
CREATE TABLE tx_t3vnavigations_domain_model_overview_navigation_item (
  name varchar(255) DEFAULT '' NOT NULL,
  label varchar(255) DEFAULT '' NOT NULL,
  type varchar(32) DEFAULT 'default' NOT NULL,
  handle varchar(255) DEFAULT '' NOT NULL,
  abstract text NOT NULL,
  thumbnails int(11) unsigned DEFAULT '0' NOT NULL,
  page int(11) DEFAULT '0' NOT NULL,
  link varchar(255) DEFAULT '' NOT NULL,
  layout varchar(32) DEFAULT 'default' NOT NULL,
  sorting int(11) DEFAULT '0' NOT NULL
);

-- Table structure for table `tx_t3vnavigations_domain_model_quick_navigation_item`
CREATE TABLE tx_t3vnavigations_domain_model_quick_navigation_item (
  name varchar(255) DEFAULT '' NOT NULL,
  label varchar(255) DEFAULT '' NOT NULL,
  type varchar(32) DEFAULT 'default' NOT NULL,
  handle varchar(255) DEFAULT '' NOT NULL,
  page int(11) DEFAULT '0' NOT NULL,
  link varchar(255) DEFAULT '' NOT NULL,
  layout varchar(32) DEFAULT 'default' NOT NULL,
  sorting int(11) DEFAULT '0' NOT NULL
);

-- Table structure for table `tx_t3vnavigations_domain_model_vendor_navigation_item`
CREATE TABLE tx_t3vnavigations_domain_model_vendor_navigation_item (
  name varchar(255) DEFAULT '' NOT NULL,
  label varchar(255) DEFAULT '' NOT NULL,
  type varchar(32) DEFAULT 'default' NOT NULL,
  handle varchar(255) DEFAULT '' NOT NULL,
  page int(11) DEFAULT '0' NOT NULL,
  link varchar(255) DEFAULT '' NOT NULL,
  layout varchar(32) DEFAULT 'default' NOT NULL,
  sorting int(11) DEFAULT '0' NOT NULL
);

-- _XXX_T3V_GENERATOR_XXX_ --
