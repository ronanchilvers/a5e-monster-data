---
statblock: true
name: Knight
source: 'Level Up: Monstrous Menagerie'
size: Medium
type: Humanoid
cr: 3
ac: 18
hp: 52
hit_dice: '8d8 + 16'
speed: '30 ft.'
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
    - { history: 0 }
    - { perception: 2 }
senses: 'passive Perception 12'
languages: 'any two'
traits:
    - { name: Brave, desc: 'The knight has advantage on saving throws against being frightened.' }
actions:
    - { name: Multiattack, desc: 'The knight attacks twice with their greatsword.' }
    - { name: Greatsword, desc: 'Melee Weapon Attack: +5 to hit, reach 5 ft., one target. Hit: 10 (2d6 + 3) slashing damage.' }
    - { name: 'Lance (Mounted Only)', desc: 'Melee Weapon Attack: +5 to hit, reach 10 ft., one target. Hit: 9 (1d12 + 3) piercing damage. If the knight moves at least 20 feet straight towards the target before the attack, they deal an extra 6 (1d12) piercing damage, and the target makes a DC 13 Strength saving throw, falling prone on a failure. This attack is made at disadvantage against targets within 5 feet.' }
    - { name: 'Heavy Crossbow', desc: 'Ranged Weapon Attack: +3 to hit, range 100/400 ft., one target. Hit: 6 (1d10 + 1) piercing damage.' }
    - { name: 'Knightly Inspiration (1/Day)', desc: 'The knight inspires creatures of their choice within 30 feet that can hear and understand them. For the next minute, inspired creatures gain an expertise die (1d4) on attack rolls and saving throws. A creature can benefit from only one Knightly Inspiration at a time, and the knight cannot target themselves.' }
    - { name: 'The typical knight is a highly-trained, heavily-armored cavalry soldier who has sworn allegiance to a noble, monarch, or faith', desc: 'Not every knight, however, is forged from the same iron. Some knights fight on foot or on griffon-back, and some owe allegiance to none but themselves.' }

---
```statblock
monster: Knight
```
