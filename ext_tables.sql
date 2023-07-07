#
# SQL definition of database tables for extension 'ucph_ce_slider'
#
--
-- Table structure for table 'tt_content'
--
CREATE TABLE tt_content (
    tx_ucph_ce_slider_item int(11) DEFAULT '0' NOT NULL,
);

--
-- Table structure for table 'tx_ucph_ce_slider_item'
--
CREATE TABLE tx_ucph_ce_slider_item (
    tt_content int(11) DEFAULT '0' NOT NULL,
    header varchar(255) DEFAULT '' NOT NULL,
    bodytext mediumtext,
    slidelink varchar(255) DEFAULT '' NOT NULL,
    image int(11) DEFAULT '0' NOT NULL,
);