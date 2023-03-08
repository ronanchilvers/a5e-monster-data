---
statblock: true
name: Scarecrow
source: 'Level Up: Monstrous Menagerie'
size: Medium
type: Construct
cr: 1
ac: 12
hp: 31
hit_dice: 7d8
speed: '30 ft.'
stats:
    - 12
    - 14
    - 10
    - 6
    - 10
    - 14
damage_resistances: 'bludgeoning, piercing'
damage_immunities: poison
condition_immunities: 'charmed, fatigue, frightened, paralyzed, petrified, poisoned'
senses: 'darkvision 60 ft., passive Perception 10'
languages: "understands the languages of its creator but can't speak"
traits:
    - { name: 'False Appearance', desc: 'While motionless, the scarecrow is indistinguishable from an ordinary scarecrow.' }
    - { name: Flammable, desc: "After taking fire damage, the scarecrow catches fire and takes 5 (1d10) ongoing fire damage if it isn't already suffering ongoing fire damage. A creature can spend an action to extinguish this fire." }
    - { name: 'Local Spirit', desc: 'The scarecrow is destroyed if it travels more than a mile from the place it was created.' }
    - { name: Spell-created, desc: 'The DC for dispel magic to destroy this creature is 19.' }
actions:
    - { name: Multiattack, desc: 'The scarecrow uses Scare and makes two slam attacks.' }
    - { name: Slam, desc: 'Melee Weapon Attack: +4 to hit, reach 5 ft., one target. Hit: 5 (1d6 + 2) bludgeoning damage.' }
    - { name: Scare, desc: "Each creature of the scarecrow's choice within 30 feet that can see the scarecrow makes a DC 12 Wisdom saving throw. On a failure, it is magically frightened for 1 minute. It repeats the saving throw at the end of each of its turns, ending the effect on itself on a success. If a creature's saving throw is successful or the effect ends for it, it is immune to Scare for 24 hours." }
    - { name: 'Hat of Illusion (1/Day)', desc: 'While wearing a hat or other head covering, the scarecrow takes on the illusory appearance of the last living humanoid to wear that hat. It requires a DC 12 Insight or Perception check to recognize the illusion. The illusion ends when the scarecrow is touched, takes damage, attacks, or uses Scare, or when the scarecrow chooses to end it as a bonus action.' }
combat:
    - { name: 'The scarecrow uses Scare and then slams a target, preferably a frightened one', desc: "Most scarecrows guard a particular person or place and don't chase a fleeing enemy." }

---
```statblock
monster: Scarecrow
```
