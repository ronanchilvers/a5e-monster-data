---
statblock: true
name: 'Divi Noble - A5E'
source: 'Level Up: Monstrous Menagerie'
size: Large
type: Elemental
cr: 11
ac: 18
hp: 345
hit_dice: '30d10 + 180, bloodied 172)'
speed: '30 ft., burrow 30 ft., fly 30 ft.'
stats:
    - 22
    - 12
    - 22
    - 5
    - 6
    - 6
damage_resistances: acid
condition_immunities: petrified
saves:
    - { strength: 10 }
    - { constitution: 10 }
    - { intelligence: 5 }
    - { wisdom: 6 }
    - { charisma: 6 }
skillsaves:
    - { athletics: 10 }
    - { perception: 6 }
senses: 'darkvision 120 ft., tremorsense 30 ft., passive Perception 16'
languages: Terran
traits:
    0: { name: 'Earth Glide', desc: 'The divi can burrow through nonmagical, unworked earth and stone without disturbing it.' }
    1: { name: 'Innate Spellcasting', desc: "The divi's innate spellcasting ability is Charisma (spell save DC 14). It can innately cast the following spells, requiring no material components:" }
    traits: ['At will: alter self (can assume Medium or Large form), detect magic, stone shape', '3/day each: creation, move earth, passwall, tongues', '1/day each: conjure elemental (earth elemental only), plane shift (to Elemental Plane of Earth only)']
    2: { name: 'Siege Monster', desc: 'The divi deals double damage to objects and structures.' }
    3: { name: 'Elemental Demise', desc: 'When a genie dies, its body becomes a mote of elemental energy. This mote might take the form of a glowing chunk of earth, a shard of crystallized air, or an ever-burning ember.' }
    4: { name: 'Elite Recovery', desc: 'At the end of each of its turns while bloodied, the divi noble ends one negative effect currently affecting it. It can do so as long as it has at least 1 hit point, even while unconscious or incapacitated.' }
    5: { name: 'Magic Resistance', desc: 'While bloodied, the divi noble has advantage on saving throws against spells and magical effects.' }
    6: { name: Wish, desc: 'Three times per year, the divi noble can cast wish for a mortal, using no material components.' }
actions:
    - { name: Multiattack, desc: 'The divi makes two melee attacks.' }
    - { name: 'Crushing Hand', desc: "Melee Weapon Attack: +10 to hit, reach 5 ft., one target. Hit: 15 (2d8 + 6) bludgeoning damage, and the target is grappled (escape DC 18). Until this grapple ends, the divi can't use Crushing Hand on another target and has advantage on Crushing Hand attacks against this target, and the target can't breathe." }
    - { name: 'Stone Club', desc: 'Melee Weapon Attack: +10 to hit, reach 10 ft., one target. Hit: 24 (4d8 + 6) bludgeoning damage.' }
    - { name: 'Quake (Recharge 5-6)', desc: 'Amid deafening rumbling, the ground shakes in a 10-foot radius around a point on an earth or stone surface within 90 feet. The area becomes difficult terrain. Each non-elemental creature in the area makes a DC 18 Constitution saving throw, taking 24 (7d6) thunder damage and falling prone on a failure or taking half damage on a success.' }
'bonus actions':
    0: { name: 'Stone Wall (1/Day)', desc: "A permanent stone wall magically rises from an earth or stone surface within 60 feet. The wall is 6 inches thick and can be up to 20 feet high and 30 feet long. If it appears in a creature's space, the creature can choose which side of the wall to move to. Each 10-foot-by-10-foot section of the wall is an object with AC 18 and 30 hit points." }
    'bonus actions': ['The divi noble has the following additional bonus actions, which it can use only while bloodied:']
    1: { name: Quake, desc: 'The divi uses Quake.' }
    2: { name: 'Meteor Fall (1/Day)', desc: "Dozens of rocks fall from the sky or ceiling. Each creature of the divi's choice within 120 feet makes a DC 18 Constitution saving throw, taking 49 (14d6) bludgeoning damage on a failure or half damage on a success." }
combat:
    - { name: 'Div prefer to fight while standing on earth or stone', desc: 'They attack with surprise and ambush ranged creatures using their burrow speed. A divi usually grabs spellcasters and ranged attackers in its crushing hand while engaging melee combatants with its club. It uses Stone Wall to separate opponents so that it can fight them individually. A divi fights until pushed to the brink of defeat. It burrows to safety if reduced to 34 hit points or fewer.' }

---
```statblock
monster: Divi Noble - A5E
```
