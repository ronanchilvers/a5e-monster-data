---
statblock: true
name: 'Winter Hag'
source: 'Level Up: Monstrous Menagerie'
size: Medium
type: Fey
cr: 7
ac: 17
hp: 120
hit_dice: '16d8 + 48'
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
    traits: ['At will: charm person, dancing lights, invisibility, minor illusion, passwall (ice only)', '1/day: control weather (extreme cold), geas, scrying']
actions:
    - { name: Multiattack, desc: 'The hag attacks with its claws and uses Ice Bolt.' }
    - { name: Claws, desc: 'Melee Weapon Attack: +7 to hit, reach 5 ft., one target. Hit: 15 (2d10 + 4) slashing damage.' }
    - { name: 'Ice Bolt', desc: "Ranged Spell Attack: +7 to hit, range 60 ft., one creature. Hit: 15 (2d10 + 4) cold damage, and the target makes a DC 15 Constitution saving throw. A creature under the hag's curse automatically fails this saving throw. On a failure, the creature is restrained as it begins to turn to ice. At the end of the creature's next turn, the creature repeats the saving throw. On a success, the effect ends. On a failure, the creature is petrified into ice. This petrification can be removed with greater restoration or similar magic." }
    - { name: Shapeshift, desc: "The hag magically polymorphs into a Small or Medium humanoid or back into its true form. Its statistics are the same in each form. Equipment it is carrying isn't transformed. It retains a streak of white hair in any form. It returns to its true form if it dies." }
    - { name: 'Invisibility (2nd-Level; V, S, Concentration)', desc: 'The hag is invisible for 1 hour. The spell ends if the hag attacks or casts a spell.' }
reactions:
    - { name: 'Ice Shield', desc: 'The hag adds 3 to its AC against one melee attack that would hit it made by a creature it can see. If the attack misses, the attacker takes 14 (4d6) cold damage.' }
combat:
    - { name: 'If the hag has allies to protect it, it uses Ice Bolt from a distance', desc: 'If alone, it attacks melee combatants with its claws while using Ice Bolt against a ranged attacker. When the hag is reduced to 40 hit points or fewer, it turns invisible and tries to escape.' }

---
```statblock
monster: Winter Hag
```
