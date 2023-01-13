---
statblock: true
name: 'Grimlock - A5E'
source: 'Level Up: Monstrous Menagerie'
size: Medium
type: Humanoid
cr: 1
ac: 12
hp: 13
hit_dice: '2d8 + 4'
speed: '30 ft.'
stats:
    - 14
    - 14
    - 14
    - 14
    - 10
    - 8
condition_immunities: blinded
skillsaves:
    - { athletics: 4 }
    - { engineering: 4 }
    - { perception: 2 }
    - { stealth: 4 }
senses: 'blindsight 30 ft., or 10 ft. while deafened (blind beyond this radius), passive Perception 14'
languages: Undercommon
traits:
    - { name: Camouflage, desc: 'The grimlock has advantage on Stealth checks made to hide in rocky terrain.' }
    - { name: 'Keen Hearing and Smell', desc: 'The grimlock has advantage on Perception checks that rely on hearing or smell.' }
actions:
    - { name: 'Spiked Club', desc: 'Melee Weapon Attack: +4 to hit, reach 5 ft., one target. Hit: 4 (1d4 + 2) bludgeoning damage plus 2 (1d4) piercing damage.' }
    - { name: Throttle, desc: "Melee Weapon Attack: +4 to hit, reach 5 ft., one creature. Hit: 4 (1d4 + 2) bludgeoning damage, and the target is grappled (escape DC 12) and can't breathe. Until this grapple ends, the grimlock can't use any attack other than throttle and only against the grappled target, and it makes this attack with advantage." }
    - { name: Sling, desc: 'Ranged Weapon Attack: +4 to hit, range 30/120 ft., one target. Hit: 4 (1d4 + 2) bludgeoning damage.' }
combat:
    - { name: 'Grimlocks stealthily approach a group of foes, throttling and dragging them off one at a time', desc: 'In a pitched battle, grimlocks are adept at determining which creatures are moving hesitantly (blinded by darkness or other effects) and attacking those targets. After two rounds of face-to-face combat, grimlocks retreat, tracking their foes from a distance and attacking again when surprise is on their side.' }

---
```statblock
monster: Grimlock - A5E
```
