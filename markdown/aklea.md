---
statblock: true
name: 'Aklea - A5E'
source: 'Level Up: Monstrous Menagerie'
size: Gargantuan
type: Celestial
cr: 22
ac: 21
hp: 656
hit_dice: '32d20 + 320'
speed: '60 ft., fly 60 ft.'
stats:
    - 30
    - 24
    - 30
    - 22
    - 24
    - 26
damage_immunities: 'radiant; damage from nonmagical weapons'
saves:
    strength: 17
    constitution: 17
    intelligence: 13
    wisdom: 14
    charisma: 15
senses: 'truesight 120 ft., passive Perception 17'
languages: 'Celestial, Common, six more'
traits:
    0: { name: 'Divine Grace', desc: 'If the empyrean makes a saving throw against an effect that deals half damage on a success, it takes no damage on a success and half damage on a failure. Furthermore, while wearing medium armor, the empyrean adds its full Dexterity bonus to its Armor Class (already included).' }
    1: { name: 'Innate Spellcasting', desc: "The empyrean's innate spellcasting ability is Charisma (spell save DC 23). It can innately cast the following spells, requiring no material components:" }
    traits: ['At will: charm person, command, telekinesis', '3/day: flame strike, hold monster, lightning bolt', "1/day: commune, greater restoration, heroes' feast, plane shift (self only, can't travel to or from the Material Plane)"]
    2: { name: 'Magic Resistance', desc: 'The empyrean has advantage on saving throws against spells and other magical effects.' }
    3: { name: Regeneration, desc: 'The empyrean regains 10 hit points at the beginning of its turn as long as it has at least 1 hit point.' }
    4: { name: 'Immortal Nature', desc: "A titan doesn't require air, sustenance, or sleep." }
    5: { name: 'Blind Rage', desc: 'While bloodied, Aklea can take 3 legendary actions instead of 1. While bloodied and in line of sight of other creatures, she must use each of her actions and legendary actions to either make a weapon attack against a creature she can see within range or fly towards the closest creature she can see.' }
    6: { name: 'Elite Recovery', desc: 'At the end of her turn, Aklea ends one negative effect currently affecting her. She can do so as long as she has at least 1 hit point, even while unconscious or incapacitated.' }
actions:
    - { name: Maul, desc: 'Melee Weapon Attack: +17 to hit, reach 10 ft., one target. Hit: 38 (8d6 + 10) bludgeoning damage plus 14 (4d6) radiant damage, and the target makes a DC 25 Strength saving throw. On a failure, the target is pushed up to 30 feet away and knocked prone.' }
    - { name: 'Lightning Bolt (3rd-Level; V, S)', desc: 'A bolt of lightning 5 feet wide and 100 feet long arcs from the empyrean. Each creature in the area makes a DC 23 Dexterity saving throw, taking 28 (8d6) lightning damage on a failure or half damage on a success.' }
    - { name: 'Flame Strike (5th-Level; V, S)', desc: 'A column of divine flame fills a 10-foot-radius, 40-foot-high cylinder within 60 feet. Creatures in the area make a DC 23 Dexterity saving throw, taking 14 (4d6) fire damage and 14 (4d6) radiant damage on a failure or half damage on a success.' }
    - { name: 'Hold Monster (5th-Level; V, S, Concentration)', desc: 'One creature the empyrean can see within 60 feet makes a DC 23 Wisdom saving throw. On a failure, the target is paralyzed for 1 minute. The target repeats the saving throw at the end of each of its turns, ending the effect on a success.' }
'bonus actions':
    - { name: 'Immortal Form', desc: 'The empyrean magically changes its size between Gargantuan and Medium. While Medium, the empyrean has disadvantage on Strength checks. Its statistics are otherwise unchanged.' }
'legendary actions':
    - { name: 'The empyrean can take 1 legendary action, choosing from the options below', desc: "Only one legendary action can be used at a time and only at the end of another creature's turn. It regains spent legendary actions at the start of its turn." }
    - { name: Attack, desc: 'The empyrean makes a weapon attack.' }
    - { name: 'Cast Spell', desc: "The empyrean casts a spell. The empyrean can't use this option if it has cast a spell since the start of its last turn." }
    - { name: Fly, desc: 'The empyrean flies up to half its fly speed.' }
    - { name: 'Shout (Recharge 56)', desc: "Each creature within 120 feet that can hear the empyrean makes a DC 25 Constitution saving throw. On a failure, a creature takes 24 (7d6) thunder damage and is stunned until the end of the empyrean's next turn. On a success, a creature takes half damage." }
combat:
    - { name: 'The empyrean flies at least 50 feet in the air, raining lightning bolts and flame strikes on land-bound foes', desc: 'It attacks flying enemies with its maul. It uses Shout whenever it can and then attacks stunned creatures with its maul. If not on the Material Plane, it uses plane shift when reduced to 100 hit points or fewer.' }

---
```statblock
monster: Aklea - A5E
```
