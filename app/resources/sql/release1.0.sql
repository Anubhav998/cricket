/* change field name in team table */

ALTER TABLE `team` CHANGE `logo` `imageid` VARCHAR(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL;

/* changes in images table */
ALTER TABLE `images` CHANGE `id` `id` INT(10) NOT NULL AUTO_INCREMENT; 

ALTER TABLE `images` CHANGE `playerid` `playerid` VARCHAR(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL;
ALTER TABLE `images` CHANGE `teamid` `teamid` VARCHAR(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL; 
ALTER TABLE `images` CHANGE `fixtureid` `fixtureid` VARCHAR(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL; 
ALTER TABLE `images` CHANGE `newsid` `newsid` VARCHAR(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL; 

/*changes in player table */
ALTER TABLE `player` DROP `teamplayerid`;
ALTER TABLE `player` ADD `imageid` VARCHAR(10) NOT NULL ;
ALTER TABLE `player` CHANGE `bdate` `bdate` DATE NOT NULL; 