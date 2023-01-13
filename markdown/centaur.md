---
statblock: true
name: 'Centaur - A5E'
source: 'Level Up: Monstrous Menagerie'
size: Large
type: Fey
cr: 2
ac: 13
hp: 45
hit_dice: '6d10 + 12'
speed: '50 ft.'
stats:
    - 16
    - 16
    - 14
    - 10
    - 16
    - 10
skillsaves:
    nature: 5
    perception: 5
    survival: 5
senses: 'passive Perception 17'
languages: 'Common, Elvish, Sylvan'
actions:
    - { name: Multiattack, desc: 'The centaur attacks with its pike and its hooves.' }
    - { name: Pike, desc: 'Melee Weapon Attack: +5 to hit, reach 10 ft., one target. Hit: 8 (1d10 + 3) piercing damage.' }
    - { name: Hooves, desc: "Melee Weapon Attack: +5 to hit, reach 5 ft., one target. Hit: 8 (2d4 + 3) bludgeoning damage. If this attack deals damage, the centaur's movement doesn't provoke opportunity attacks from the target for the rest of the centaur's turn." }
    - { name: Shortbow, desc: 'Ranged Weapon Attack: +5 to hit, range 80/320 ft., one target. Hit: 10 (2d6 + 3) piercing damage.' }
    - { name: 'Deadeye Shot (1/Day)', desc: 'The centaur makes a shortbow attack with advantage.' }
combat:
    - { name: 'Centaurs open combat by firing a Deadeye Shot', desc: 'If their enemies have weak ranged options, the centaurs continue to use their shortbows from a distance. Otherwise, they gallop into battle, attack with their pikes and hooves, and gallop out again. They try to avoid ending their turn next to a foe. They retreat if half their number fall.' }

---
```statblock
monster: Centaur - A5E
```
