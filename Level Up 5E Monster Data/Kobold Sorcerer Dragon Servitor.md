---
statblock: true
name: 'Kobold Sorcerer Dragon Servitor'
source: 'Level Up: Monstrous Menagerie'
size: Small
type: Humanoid
cr: 2
ac: 12
hp: 27
hit_dice: '5d6 + 10'
speed: '30 ft.'
stats:
    - 6
    - 14
    - 14
    - 10
    - 10
    - 14
skillsaves:
    - { arcana: 2 }
    - { intimidation: 4 }
senses: 'darkvision 60 ft., passive Perception 10'
languages: 'Common, Draconic'
traits:
    0: { name: 'Innate Spellcasting', desc: "The kobold's innate spellcasting ability is Charisma (save DC 12). It can innately cast the following spells, requiring no material components:" }
    traits: ['At will: mage hand, mending', '1/day each: charm person, expeditious retreat, mage armor']
    1: { name: 'Pack Tactics', desc: "The kobold has advantage on attack rolls against a creature if at least one of the kobold's allies is within 5 feet of the creature and not incapacitated." }
    2: { name: 'Sunlight Sensitivity', desc: 'While in sunlight, the kobold has disadvantage on attack rolls, as well as on Perception checks that rely on sight.' }
    3: { name: "Dragon's Blood", desc: "The kobold gains resistance to the damage type of its master's breath weapon." }
    4: { name: 'Ominous Shadow', desc: 'The kobold loses its Sunlight Sensitivity trait while within 60 feet of its master.' }
actions:
    - { name: 'Multiattack (2/day)', desc: 'The kobold sorcerer makes three flame bolt attacks.' }
    - { name: 'Flame Bolt', desc: "Ranged Spell Attack: +4 to hit, range 120 ft., one target. Hit: 7 (1d10+2) fire damage. The damage type of the sorcerer's flame bolt attack changes to match the damage type of its master's breath weapon." }
    - { name: Shiv, desc: 'Melee Weapon Attack: +4 to hit, reach 5 ft., one target. Hit: 4 (1d4 + 2) piercing damage.' }
'bonus actions':
    - { name: 'Expeditious Retreat (1st-Level; V, S, Concentration)', desc: 'When casting this spell and as a bonus action on subsequent turns for 10 minutes, the kobold sorcerer can take the Dash action.' }

---
```statblock
monster: Kobold Sorcerer Dragon Servitor
```
