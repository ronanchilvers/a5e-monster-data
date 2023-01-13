---
statblock: true
name: 'Gorgon - A5E'
source: 'Level Up: Monstrous Menagerie'
size: Large
type: Monstrosity
cr: 6
ac: 19
hp: 110
hit_dice: '13d10 + 39'
speed: '50 ft.'
stats:
    - 20
    - 10
    - 16
    - 2
    - 12
    - 5
condition_immunities: petrified
skillsaves:
    perception: 4
senses: 'passive Perception 14'
actions:
    - { name: Gore, desc: 'Melee Weapon Attack: +8 to hit, reach 5 ft., one target. Hit: 18 (2d12 + 5) piercing damage, and the target makes a DC 16 Strength saving throw, falling prone on a failure. If the gorgon moves at least 20 feet straight towards the target before the attack, the attack deals an extra 6 (1d12) piercing damage.' }
    - { name: Hooves, desc: 'Melee Weapon Attack: +8 to hit, reach 5 ft., one target. Hit: 16 (2d10 + 5) bludgeoning damage.' }
    - { name: 'Petrifying Breath (Recharge 56)', desc: "The gorgon exhales petrifying gas in a 30-foot cone. Each creature in the area makes a DC 14 Constitution saving throw. On a failure, a creature is restrained as it begins to turn to stone. At the beginning of the gorgon's next turn, the creature repeats the saving throw. On a success, the effect ends. On a failure, the creature is petrified. This petrification can be removed with greater restoration or similar magic." }
'bonus actions':
    - { name: 'Trample Underfoot', desc: 'The gorgon attacks a prone creature with its hooves.' }
combat:
    - { name: 'If the gorgon can charge more than 20 feet at an enemy without provoking an opportunity attack, it does so', desc: "Otherwise, it uses Petrifying Breath if it can. As a last resort, it attacks with its gore without charging. The gorgon flees only if it can't reach any enemies." }

---
```statblock
monster: Gorgon - A5E
```
