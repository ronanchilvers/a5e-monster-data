---
statblock: true
name: Divi
source: 'Level Up: Monstrous Menagerie'
size: Large
type: Elemental
cr: 11
ac: 18
hp: 172
hit_dice: '15d10 + 90'
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
actions:
    - { name: Multiattack, desc: 'The divi makes two melee attacks.' }
    - { name: 'Crushing Hand', desc: "Melee Weapon Attack: +10 to hit, reach 5 ft., one target. Hit: 15 (2d8 + 6) bludgeoning damage, and the target is grappled (escape DC 18). Until this grapple ends, the divi can't use Crushing Hand on another target and has advantage on Crushing Hand attacks against this target, and the target can't breathe." }
    - { name: 'Stone Club', desc: 'Melee Weapon Attack: +10 to hit, reach 10 ft., one target. Hit: 24 (4d8 + 6) bludgeoning damage.' }
    - { name: 'Quake (Recharge 5-6)', desc: 'Amid deafening rumbling, the ground shakes in a 10-foot radius around a point on an earth or stone surface within 90 feet. The area becomes difficult terrain. Each non-elemental creature in the area makes a DC 18 Constitution saving throw, taking 24 (7d6) thunder damage and falling prone on a failure or taking half damage on a success.' }
'bonus actions':
    - { name: 'Stone Wall (1/Day)', desc: "A permanent stone wall magically rises from an earth or stone surface within 60 feet. The wall is 6 inches thick and can be up to 20 feet high and 30 feet long. If it appears in a creature's space, the creature can choose which side of the wall to move to. Each 10-foot-by-10-foot section of the wall is an object with AC 18 and 30 hit points." }
combat:
    - { name: 'Div prefer to fight while standing on earth or stone', desc: 'They attack with surprise and ambush ranged creatures using their burrow speed. A divi usually grabs spellcasters and ranged attackers in its crushing hand while engaging melee combatants with its club. It uses Stone Wall to separate opponents so that it can fight them individually. A divi fights until pushed to the brink of defeat. It burrows to safety if reduced to 34 hit points or fewer.' }

---
```statblock
monster: Divi
```
