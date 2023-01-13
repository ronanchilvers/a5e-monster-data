---
statblock: true
name: 'Medusa Queen - A5E'
source: 'Level Up: Monstrous Menagerie'
size: Medium
type: Monstrosity
cr: 11
ac: 14
hp: 153
hit_dice: '18d10 + 54'
speed: '30 ft.'
stats:
    - 12
    - 18
    - 16
    - 12
    - 14
    - 14
skillsaves:
    deception: 5
    insight: 5
    perception: 5
    stealth: 7
senses: 'darkvision 60 ft., passive Perception 15'
languages: Common
traits:
    - { name: 'Petrifying Gaze', desc: "When a creature starts its turn within 60 feet of the medusa and can see the medusa's eyes, it can choose to shut its eyes until the beginning of its next turn unless it is surprised or incapacitated. Otherwise, the medusa uses its petrifying gaze on the creature. If the medusa sees its own reflection and doesn't shut its eyes, it is subject to its own gaze." }
    - { name: "A creature subject to the medusa's petrifying gaze makes a DC 14 Constitution saving throw", desc: 'If it rolls a natural 1 on the save, it is petrified instantly. If it otherwise fails the save, it is restrained as it begins to be petrified. The creature repeats the saving throw at the end of its turn, ending the effect on itself on a success and becoming petrified on a failure. The petrification can be removed with greater restoration or similar powerful magic.' }
actions:
    - { name: Multiattack, desc: 'The medusa makes any combination of two attacks with its snake hair and longbow.' }
    - { name: 'Snake Hair', desc: "Melee Weapon Attack: +7 to hit, reach 5 ft., one target. Hit: 7 (1d6 + 4) piercing damage plus 7 (2d6) poison damage, plus an additional 3 (1d6) piercing damage if the target is a creature that is surprised or that can't see the medusa." }
    - { name: Longbow, desc: 'Ranged Weapon Attack: +7 to hit, range 150/600 ft., one target. Hit: 8 (1d8 + 4) piercing damage plus 7 (2d6) poison damage.' }
'legendary actions':
    - { name: "The medusa queen has one legendary action it can take at the end of another creature's turn, choosing from the options below", desc: 'The medusa queen regains the spent legendary action at the start of its turn.' }
    - { name: Hide, desc: 'The medusa moves up to half its Speed and hides.' }
    - { name: 'Snake Hair', desc: 'The medusa uses Snake Hair.' }
    - { name: 'Frenzy of Snakes (1/Day, When Bloodied)', desc: 'The medusa uses Snake Hair on each creature within 5 feet.' }
    - { name: 'Imperious Command', desc: 'A creature with averted or covered eyes within 60 feet that can hear the medusa makes a DC 13 Wisdom saving throw. On a failure, it looks at the medusa, making itself the target of Petrifying Gaze if it and the medusa can see each other. On a success, the creature is immune to Imperious Command for 24 hours. This is a charm effect.' }
combat:
    - { name: "The medusa ambushes (or otherwise reveals its eyes suddenly) so its opponents can't avert their gaze", desc: 'It makes melee attacks against creatures with averted eyes. When bloodied, it hides if possible, setting up further ambushes.' }

---
```statblock
monster: Medusa Queen - A5E
```
