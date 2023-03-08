---
statblock: true
name: Doppelganger
source: 'Level Up: Monstrous Menagerie'
size: Medium
type: Monstrosity
cr: 3
ac: 14
hp: 52
hit_dice: '8d8 + 16'
speed: '30 ft.'
stats:
    - 10
    - 18
    - 14
    - 10
    - 14
    - 16
skillsaves:
    - { deception: 5 }
    - { insight: 4 }
    - { stealth: 6 }
senses: 'darkvision 60 ft., passive Perception 12'
languages: Common
actions:
    - { name: 'Precise Strike', desc: 'Melee Weapon Attack: +6 to hit, reach 5 ft., one target. Hit: 11 (2d6 + 4) bludgeoning damage. If the target is surprised, it takes an extra 10 (3d6) damage.' }
'bonus actions':
    - { name: Shapeshift, desc: 'The doppelganger changes its form to that of any Small or Medium humanoid creature it has seen before, or back into its true form. While shapeshifted, its statistics are the same. Any equipment is not transformed. It reverts to its true form if it dies.' }
    - { name: 'Read Thoughts', desc: 'The doppelganger magically reads the surface thoughts of one creature within 60 feet that it can see. Until the end of its turn, it has advantage on attack rolls and on Deception, Insight, Intimidation, and Persuasion checks against the creature.' }
combat:
    - { name: 'Doppelgangers strike with surprise, either by lurking unseen or by adopting a trusted guise', desc: 'They use Read Thoughts to gain advantage on attacks. When outnumbered, a doppelganger flees.' }

---
```statblock
monster: Doppelganger
```
