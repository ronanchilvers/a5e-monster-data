---
statblock: true
name: 'Medusa - A5E'
source: 'Level Up: Monstrous Menagerie'
size: Medium
type: Monstrosity
cr: 7
ac: 14
hp: 120
hit_dice: '16d8 + 48'
speed: '30 ft.'
stats:
    - 12
    - 18
    - 16
    - 12
    - 14
    - 14
skillsaves:
    - { deception: 5 }
    - { insight: 5 }
    - { perception: 5 }
    - { stealth: 7 }
senses: 'darkvision 60 ft., passive Perception 15'
languages: Common
traits:
    - { name: 'Petrifying Gaze', desc: "When a creature starts its turn within 60 feet of the medusa and can see the medusa's eyes, it can choose to shut its eyes until the beginning of its next turn unless it is surprised or incapacitated. Otherwise, the medusa uses its petrifying gaze on the creature. If the medusa sees its own reflection and doesn't shut its eyes, it is subject to its own gaze." }
    - { name: "A creature subject to the medusa's petrifying gaze makes a DC 14 Constitution saving throw", desc: 'If it rolls a natural 1 on the save, it is petrified instantly. If it otherwise fails the save, it is restrained as it begins to be petrified. The creature repeats the saving throw at the end of its turn, ending the effect on itself on a success and becoming petrified on a failure. The petrification can be removed with greater restoration or similar powerful magic.' }
actions:
    - { name: Multiattack, desc: 'The medusa makes any combination of two attacks with its snake hair and longbow.' }
    - { name: 'Snake Hair', desc: "Melee Weapon Attack: +7 to hit, reach 5 ft., one target. Hit: 7 (1d6 + 4) piercing damage plus 7 (2d6) poison damage, plus an additional 3 (1d6) piercing damage if the target is a creature that is surprised or that can't see the medusa." }
    - { name: Longbow, desc: 'Ranged Weapon Attack: +7 to hit, range 150/600 ft., one target. Hit: 8 (1d8 + 4) piercing damage plus 7 (2d6) poison damage.' }
combat:
    - { name: "The medusa ambushes (or otherwise reveals its eyes suddenly) so its opponents can't avert their gaze", desc: 'It makes melee attacks against creatures with averted eyes. When bloodied, it hides if possible, setting up further ambushes.' }

---
```statblock
monster: Medusa - A5E
```
