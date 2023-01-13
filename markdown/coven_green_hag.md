---
statblock: true
name: 'Coven Green Hag - A5E'
source: 'Level Up: Monstrous Menagerie'
size: Medium
type: Fey
cr: 5
ac: 14
hp: 97
hit_dice: '15d8 + 30'
speed: '30 ft.'
stats:
    - 16
    - 14
    - 14
    - 14
    - 14
    - 16
saves:
    constitution: 4
    wisdom: 4
skillsaves:
    arcana: 4
    deception: 5
    insight: 4
    perception: 4
    stealth: 4
senses: 'darkvision 60 ft., passive Perception 14'
languages: 'Common, Draconic, Sylvan'
traits:
    0: { name: Amphibious, desc: 'The hag can breathe air and water.' }
    1: { name: 'Innate Spellcasting', desc: "The hag's innate spellcasting ability is Charisma (spell save DC 13). It can innately cast the following spells, requiring no material components:" }
    traits: ['At will: dancing lights, disguise self, invisibility, minor illusion', '1/day: geas']
    2: { name: Mimicry, desc: 'The hag can mimic voices and animal sounds. Recognizing the sounds as imitation requires a DC 13 Insight check.' }
actions:
    - { name: Multiattack, desc: 'The hag attacks twice with its claws and then uses Hex if not in beast form.' }
    - { name: 'Beast Form', desc: "The hag magically transforms into a Large or smaller beast or back into its true form. While in beast form, it retains its game statistics, can't cast spells, can't use Hex, and can't speak. The hag's Speed increases by 10 feet, and when appropriate to its beast form it gains a climb, fly, or swim speed of 40 feet. Any equipment the hag is wearing or wielding merges into its new form." }
    - { name: Claws, desc: 'Melee Weapon Attack: +5 to hit, reach 5 ft., one target. Hit: 12 (2d8 + 3) slashing damage.' }
    - { name: 'Hex (Gaze)', desc: "A creature within 60 feet that is not already under a hag's hex makes a DC 13 Wisdom saving throw. A creature under an obligation to the hag automatically fails this saving throw. On a failed saving throw, the target is cursed with a magical hex that lasts 30 days. The curse ends early if the target suffers harm from the hag or if the hag ends it as an action. Roll 1d4:" }
    - { name: '1', desc: 'Charm Hex. The target is charmed by the hag.' }
    - { name: '2', desc: 'Fear Hex. The target is frightened of the hag.' }
    - { name: '3', desc: "Ill Fortune Hex. The hag magically divines the target's activities. Whenever the target attempts a long-duration task such as a craft or downtime activity, the hag can cause the activity to fail." }
    - { name: '4', desc: 'Sleep Hex. The target falls unconscious. The curse ends early if the target takes damage or if a creature uses an action to shake it awake.' }
    - { name: 'Invisibility (2nd-Level; V, S, Concentration)', desc: 'The hag is invisible for 1 hour. The spell ends if the hag attacks, uses Hex, or casts a spell.' }
combat:
    - { name: 'The green hag uses Hex', desc: "If it's successful, it uses its claws on a different target if one is available. If bloodied, the hag turns invisible and tries to escape." }

---
```statblock
monster: Coven Green Hag - A5E
```
