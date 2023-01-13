---
statblock: true
name: 'Bugbear - A5E'
source: 'Level Up: Monstrous Menagerie'
size: Medium
type: Humanoid
cr: 1
ac: 12
hp: 30
hit_dice: '5d8 + 8'
speed: '30 ft.'
stats:
    - 14
    - 14
    - 14
    - 10
    - 12
    - 10
skillsaves:
    - { athletics: 4 }
    - { stealth: 4 }
    - { perception: 3 }
    - { survival: 3 }
senses: 'darkvision 60 ft., passive Perception 15'
languages: 'Common, Goblin'
actions:
    - { name: Strangle, desc: "Melee Weapon Attack: +4 to hit, reach 10 ft., one Medium or smaller creature that is surprised, grappled by the bugbear, or that can't see the bugbear. Hit: 9 (2d6 + 2) bludgeoning damage, and the target is pulled 5 feet towards the bugbear and grappled (escape DC 12). Until this grapple ends, the bugbear automatically hits with the Strangle attack and the target can't breathe." }
    - { name: Maul, desc: 'Melee Weapon Attack: +4 to hit, reach 5 ft., one target. Hit: 9 (2d6 + 2) bludgeoning damage.' }
    - { name: Javelin, desc: "Melee or Ranged Weapon Attack: +4 to hit, reach 5 ft. or range 30/120 ft., one target. Hit: 5 (1d6 + 2) piercing damage, or 12 (3d6 + 2) piercing damage if the target is a creature that is surprised or that can't see the bugbear." }
    - { name: 'Stealthy Sneak', desc: 'The bugbear moves up to half its Speed without provoking opportunity attacks. It can then attempt to hide.' }
combat:
    - { name: 'A bugbear prefers to strangle an unaware opponent from hiding', desc: 'It fights with its maul if it must, but when badly injured it uses its Stealthy Sneak to reach a hiding spot and then either attack with its javelin or strangle a passing creature.' }

---
```statblock
monster: Bugbear - A5E
```
