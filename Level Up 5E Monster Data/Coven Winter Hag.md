---
statblock: true
name: 'Coven Winter Hag'
source: 'Level Up: Monstrous Menagerie'
size: Medium
type: Fey
cr: 9
ac: 17
hp: 135
hit_dice: '18d8 + 54'
speed: '30 ft.'
stats:
    - 18
    - 16
    - 16
    - 16
    - 16
    - 18
damage_resistances: cold
saves:
    - { constitution: 6 }
    - { wisdom: 6 }
skillsaves:
    - { arcana: 6 }
    - { deception: 7 }
    - { insight: 6 }
    - { perception: 6 }
    - { stealth: 6 }
senses: 'darkvision 60 ft., passive Perception 16'
languages: 'Common, Draconic, Sylvan'
traits:
    0: { name: Curse, desc: "A creature that accepts a gift from the hag is magically cursed for 30 days. While it is cursed, the target automatically fails saving throws against the hag's charm person, geas, and scrying spells, and the hag can cast control weather centered on the creature." }
    1: { name: 'Icy Travel', desc: 'The hag is not hindered by cold weather, icy surfaces, snow, wind, or storms. Additionally, the hag and her allies leave no trace when walking on snow or ice.' }
    2: { name: 'Innate Spellcasting', desc: "The hag's innate spellcasting ability is Charisma (spell save DC 15). It can innately cast the following spells, requiring no material components:" }
    traits: ['At will: charm person, dancing lights, invisibility, minor illusion, passwall (ice only)', '1/day: control weather (extreme cold), geas, scrying', '1/day each: cone of cold, wall of ice']
actions:
    - { name: Multiattack, desc: 'The hag attacks with its claws and uses Ice Bolt.' }
    - { name: Claws, desc: 'Melee Weapon Attack: +7 to hit, reach 5 ft., one target. Hit: 15 (2d10 + 4) slashing damage.' }
    - { name: 'Ice Bolt', desc: "Ranged Spell Attack: +7 to hit, range 60 ft., one creature. Hit: 15 (2d10 + 4) cold damage, and the target makes a DC 15 Constitution saving throw. A creature under the hag's curse automatically fails this saving throw. On a failure, the creature is restrained as it begins to turn to ice. At the end of the creature's next turn, the creature repeats the saving throw. On a success, the effect ends. On a failure, the creature is petrified into ice. This petrification can be removed with greater restoration or similar magic." }
    - { name: Shapeshift, desc: "The hag magically polymorphs into a Small or Medium humanoid or back into its true form. Its statistics are the same in each form. Equipment it is carrying isn't transformed. It retains a streak of white hair in any form. It returns to its true form if it dies." }
    - { name: 'Invisibility (2nd-Level; V, S, Concentration)', desc: 'The hag is invisible for 1 hour. The spell ends if the hag attacks or casts a spell.' }
    - { name: 'Cone of Cold (5th-Level; V, S)', desc: 'Frost blasts from the hag in a 60-foot cone. Each creature in the area makes a DC 15 Constitution saving throw, taking 36 (8d8) cold damage on a failure or half damage on a success.' }
    - { name: 'Wall of Ice (6th-level; V, S, Concentration)', desc: 'The hag magically creates a wall of ice on a solid surface it can see within 120 feet. The wall is flat, 1 foot thick, and can be up to 50 feet long and 20 feet high. The wall lasts for 10 minutes. Each 10-foot section has AC 12, 30 hit points, vulnerability to fire damage, and immunity to cold, poison, and psychic damage. Destroying a 10-foot section of wall leaves behind a sheet of frigid air in the space the section occupied. A creature moving through the sheet of frigid air for the first time on a turn makes a Constitution saving throw, taking 17 (5d6) cold damage on a failed save or half damage on a success.' }
    - { name: "If the wall enters a creature's space when it appears, the creature is pushed to one side of the wall (hag's choice)", desc: 'The creature then makes a Dexterity saving throw, taking 35 (10d6) cold damage on a failed save or half damage on a success.' }
reactions:
    - { name: 'Ice Shield', desc: 'The hag adds 3 to its AC against one melee attack that would hit it made by a creature it can see. If the attack misses, the attacker takes 14 (4d6) cold damage.' }
combat:
    - { name: 'If the hag has allies to protect it, it uses Ice Bolt from a distance', desc: 'If alone, it attacks melee combatants with its claws while using Ice Bolt against a ranged attacker. When the hag is reduced to 40 hit points or fewer, it turns invisible and tries to escape.' }

---
```statblock
monster: Coven Winter Hag
```
