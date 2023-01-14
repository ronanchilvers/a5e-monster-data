---
statblock: true
name: 'Merfolk Knight - A5E'
source: 'Level Up: Monstrous Menagerie'
size: Medium
type: Humanoid
cr: 3
ac: 15
hp: 52
hit_dice: '8d8 + 16'
speed: '10 ft., swim 40 ft.'
stats:
    - 16
    - 12
    - 14
    - 10
    - 10
    - 14
saves:
    - { strength: 5 }
    - { constitution: 4 }
    - { wisdom: 2 }
skillsaves:
    - { athletics: 5 }
    - { perception: 2 }
senses: 'darkvision 30 ft., passive Perception 12'
languages: 'Aquan, Common'
traits:
    - { name: Amphibious, desc: 'The knight can breathe air and water.' }
    - { name: Brave, desc: 'The knight has advantage on saving throws against being frightened.' }
actions:
    - { name: Multiattack, desc: 'The knight makes two trident attacks.' }
    - { name: Trident, desc: 'Melee or Ranged Weapon Attack: +5 to hit, reach 5 ft. or range 20/60 ft., one target. Hit: 7 (1d8 + 3) piercing damage if used with two hands to make a melee attack, or 6 (1d6 + 3) piercing damage if thrown.' }
    - { name: 'Lance (Mounted Only)', desc: 'Melee Weapon Attack: +5 to hit, reach 10 ft., one target. Hit: 9 (1d12 + 3) piercing damage. If the knight moves at least 20 feet straight towards the target before the attack, it deals an extra 6 (1d12) piercing damage, and the target makes a DC 13 Strength saving throw, falling prone on a failure. This attack is made at disadvantage against targets within 5 feet of the knight.' }
    - { name: 'Knightly Inspiration (1/Day)', desc: 'The knight inspires creatures of its choice within 30 feet that can hear and understand it. For the next minute, inspired creatures gain an expertise die on attack rolls and saving throws. A creature can benefit from only one Knightly Inspiration at a time, and the knight cannot target itself.' }
'bonus actions':
    - { name: Trident, desc: 'The knight makes a trident attack.' }
combat:
    - { name: 'If mounted, the merfolk knight charges with its lance', desc: 'It then switches to its trident. It uses Knightly Inspiration only if it can affect at least three allies. The knight fights to the death unless ordered to retreat.' }

---
```statblock
monster: Merfolk Knight - A5E
```
